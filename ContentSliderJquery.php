<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Liquid Diamond 2011 
 * @author     Andrea Collet <andrea@liquiddiamond.it>
 * 			   Nathan Searles <http://nathansearles.com>
 * @package    ce_slider_jquery 
 * @license    GPL
 * @filesource
 */

/* 
 * This Contao module works thanks to
 * 
 * SlidesJs jQuery Slider script by Nathan Searles
 * 
 * Version 1.1.9 - Updated September 5th, 2011
 * 
 * http://slidesjs.com
 * http://github.com/nathansearles/slides/
 * http://nathansearles.com
 * 
 * SlidesJs is licensed under the Apache license. http://www.apache.org/licenses/LICENSE-2.0
 * 
 */

/**
 * Class ContentSliderJquery 
 *
 * @copyright  Liquid Diamond 2011 
 * @author     Andrea Collet <andrea@liquiddiamond.it> 
 * @package    Controller
 */
class ContentSliderJquery extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_slider_jquery_html';

	/**
	 * Generate module
	 */
	public function generate()
	{
		if(TL_MODE == 'BE')
		{
			$BackendTemplate = new BackendTemplate('be_wildcard');
			$BackendTemplate->wildcard = '### CE Slider jQuery '. ($this->ce_slider_jquery_elemType == 'ce_slider_jquery_startElem' ?  'START' : 'END') .' ###';
			return($BackendTemplate->parse());
		}
		return(parent::generate());
	}

	/**
	 * Compile module
	 */
	protected function compile()
	{
		if ($this->ce_slider_jquery_elemType == 'ce_slider_jquery_startElem')
		{
			/* Select jQuery slider start element */
			// $GLOBALS['TL_JAVASCRIPT']['ce_slider_jquery']	= '<script src="plugins/ce_slider_jquery/ce_slider_jquery.slides.min.js"></script>';
			$GLOBALS['TL_CSS']['ce_slider_jquery']			= 'plugins/ce_slider_jquery/ce_slider_jquery.css';
			$GLOBALS['TL_MOOTOOLS']['ce_slider_jquery']		= '<script src="plugins/ce_slider_jquery/slides.jquery.js"></script>';

			/*
			 *	Create templates
			 */
			$this->$strTemplate 			= $this->ce_slider_jquery_template_html;
			$this->Template					= new FrontendTemplate($this->strTemplate);
			$this->TemplateCSS				= new FrontendTemplate($this->ce_slider_jquery_template_css);
			$this->TemplateJS				= new FrontendTemplate($this->ce_slider_jquery_template_js);
			
			$arrce_slider_jquery_Size		= unserialize($this->ce_slider_jquery_size);
			
			$this->Template->Output			= 'start';
			$this->Template->Width 			= $arrce_slider_jquery_Size[0];
			$this->Template->Height 		= $arrce_slider_jquery_Size[1];
			$this->Template->Container		= $this->ce_slider_jquery_container;

			/* Add jQuery Easing Plugin if necessary
			 * Script by George McGinley Smith  http://gsgd.co.uk/sandbox/jquery/easing/
			 */
			if (strlen($this->ce_slider_jquery_slideEasing) || strlen($this->ce_slider_jquery_fadeEasing))
			{
				$GLOBALS['TL_MOOTOOLS']['ce_slider_jquery_easing']		= '<script defer src="plugins/ce_slider_jquery/ce_slider_jquery.easing.min.js"></script>';
			}

			/* Select jQuery slider end element */
			$sliderEndElem		= $this->Database->prepare("SELECT sorting FROM tl_content WHERE pid=? AND invisible != 1 AND ce_slider_jquery_elemType=? ORDER by sorting DESC")->limit(1)->execute($this->pid, 'ce_slider_jquery_endElem');
			if ($sliderEndElem->numRows < 1)
			{
				$this->log('CE Slider jQuery e element is not defined', 'ce_slider_jquery compile()', TL_ERROR);
				return;
			}

			/* Select all elements inside the slider */
			$sliderElements		= $this->Database->prepare("SELECT id, type, ce_slider_jquery_pagination, cssID FROM tl_content WHERE pid = ? AND invisible != 1 AND sorting > ? AND sorting < ? ORDER by sorting ASC")->execute($this->pid, $this->sorting, $sliderEndElem->sorting);
			if ($sliderElements->numRows < 1)
			{
				$this->log('CE Slider jQuery does not contain any Content Element', 'ce_slider_jquery compile()', TL_ERROR);
				return;
			}
			$arraySliderElem	= $sliderElements->fetchAllAssoc();

			/* Populate CSS template and add it to the <head> */
			$this->TemplateCSS->Width 				= $arrce_slider_jquery_Size[0];
    		$this->TemplateCSS->Height 				= $arrce_slider_jquery_Size[1];
    		$this->TemplateCSS->Container		 	= $this->ce_slider_jquery_container;
			$this->TemplateCSS->Generate_PrevNext 	= $this->ce_slider_jquery_generateNextPrev;
			$this->TemplateCSS->NextButton_Class 	= $this->ce_slider_jquery_next;
			$this->TemplateCSS->PrevButton_Class 	= $this->ce_slider_jquery_prev;
			$this->TemplateCSS->Pagination_Class 	= $this->ce_slider_jquery_paginationClass;
			$this->TemplateCSS->Current_Class 		= $this->ce_slider_jquery_currentClass;
			
   			$GLOBALS['TL_HEAD'][]					= $this->TemplateCSS->parse();

			/* Get current page name for "barrierefreien" Link */
			global $objPage;
			$PageLink = $objPage->alias . '.html';

	  		/* Populate the javascript temaplte and add to <head> */
			$this->TemplateJS->Width 				= $arrce_slider_jquery_Size[0];
			$this->TemplateJS->Height 				= $arrce_slider_jquery_Size[1];
			$this->TemplateJS->Container			= $this->ce_slider_jquery_container;
			$this->TemplateJS->Play				 	= $this->ce_slider_jquery_play;
			$this->TemplateJS->Pause				= $this->ce_slider_jquery_pause;
			$this->TemplateJS->GenerateNextPrev		= $this->ce_slider_jquery_generateNextPrev;
			$this->TemplateJS->NextClass			= $this->ce_slider_jquery_next;
			$this->TemplateJS->PrevClass			= $this->ce_slider_jquery_prev;
			$this->TemplateJS->NextImg				= $this->ce_slider_jquery_nextImg;
			$this->TemplateJS->PrevImg				= $this->ce_slider_jquery_prevImg;
			$this->TemplateJS->Pagination			= $this->ce_slider_jquery_pagination;
			$this->TemplateJS->GeneratePagination	= $this->ce_slider_jquery_generatePagination;
			$this->TemplateJS->PaginationClass		= $this->ce_slider_jquery_paginationClass;
			$this->TemplateJS->CurrentClass			= $this->ce_slider_jquery_currentClass;
			$this->TemplateJS->Start				= $this->ce_slider_jquery_start;
			$this->TemplateJS->SlideSpeed			= $this->ce_slider_jquery_slideSpeed;
			$this->TemplateJS->SlideEasing			= $this->ce_slider_jquery_slideEasing;
			$this->TemplateJS->Randomize			= $this->ce_slider_jquery_randomize;
			$this->TemplateJS->HoverPause			= $this->ce_slider_jquery_hoverPause;
			$this->TemplateJS->AutoHeight			= $this->ce_slider_jquery_autoHeight;
			$this->TemplateJS->AutoHeightSpeed		= $this->ce_slider_jquery_autoHeightSpeed;
			$this->TemplateJS->BigTarget			= $this->ce_slider_jquery_bigTarget;

			/* Parse and add after loading jquery */
			// var_dump($GLOBALS['TL_MOOTOOLS']);
			$GLOBALS['TL_MOOTOOLS'][]				= $this->TemplateJS->parse();	
		}

    	/** --------------------------------------------------------------------
 		* Get end element of CE Slider
 		* Add Controls
  		* -------------------------------------------------------------------- */
		elseif ($this->ce_slider_jquery_elemType == 'ce_slider_jquery_endElem')
		{	
			//get StartElement
			$objStartElem = $this->Database->prepare("SELECT * FROM tl_content WHERE pid = ? AND invisible != 1 AND ce_slider_jquery_elemType = ? ORDER by sorting DESC")
								 ->limit(1)->execute($this->pid, 'ce_slider_jquery_startElem');
								 
			if ($objStartElem->numRows < 1)
			{
				$this->log('CE Slider jQuery start element is not defined', 'ce_slider_jquery compile()', TL_ERROR);
				return;
			}
			
			$this->Template 						= new FrontendTemplate($objStartElem->ce_slider_jquery_template_html);
			
			$this->Template->Output   				= 'end';
			
			$this->Template->GenerateNextPrev		= $objStartElem->ce_slider_jquery_generateNextPrev;
			$this->Template->NextClass				= $objStartElem->ce_slider_jquery_next;
			$this->Template->PrevClass				= $objStartElem->ce_slider_jquery_prev;
			$this->Template->Pagination				= $objStartElem->ce_slider_jquery_pagination;
			$this->Template->GeneratePagination		= $objStartElem->ce_slider_jquery_generatePagination;
			$this->Template->PaginationClass		= $objStartElem->ce_slider_jquery_paginationClass;
			$this->Template->CurrentClass			= $objStartElem->ce_slider_jquery_currentClass;
		}	
	}
}

?>