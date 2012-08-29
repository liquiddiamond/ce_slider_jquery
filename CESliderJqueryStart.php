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
 * @copyright  Liquid Diamond 2011-2012
 * @author     Andrea Collet <collet.andrea@gmail.com>
 *             Nathan Searles <http://nathansearles.com>
 * @package    ce_slider_jquery 
 * @license    GPL
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
 * Class CESliderJqueryStart 
 *
 * @copyright  Liquid Diamond 2011-2012
 * @author     Andrea Collet <collet.andrea@gmail.com>
 * @package    ce_slider_jquery
 */
class CESliderJqueryStart extends ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_slider_jquery_html_default';

    /**
     * Display a wildcard in the back end
     * @return string
     */
    public function generate()
    {

        if(TL_MODE == 'BE')
        {
            $this->Template = new BackendTemplate('be_wildcard');
            $this->Template->wildcard = '### CE Slider jQuery '.sprintf($GLOBALS['TL_LANG']['MSC']['ce_slider_jquery_startElem']);

            return $this->Template->parse();
        }
        return parent::generate();
    }

    /**
     * Generate content element
     */
    protected function compile()
    {

        /*  Set global plugins url  */
        if(!defined(TL_PLUGINS_URL)){
            define('TL_PLUGINS_URL', ($GLOBALS['TL_CONFIG']['staticPlugins'] != '' && !$GLOBALS['TL_CONFIG']['debugMode']) ? $GLOBALS['TL_CONFIG']['staticPlugins'] . TL_PATH . '/' : '');
        }
        if (version_compare(VERSION, '2.10', '>')) {
            $this->setStaticUrl('TL_PLUGINS_URL', $GLOBALS['TL_CONFIG']['staticPlugins']);
        }

        /*  Import JS and CSS  */
        $GLOBALS['TL_CSS']['ce_slider_jquery']                      = 'system/modules/ce_slider_jquery/public/ce_slider_jquery.css';
        $GLOBALS['TL_MOOTOOLS']['ce_slider_jquery']                 = '<script src="system/modules/ce_slider_jquery/public/ce_slider_jquery.slides.min.js"></script>';
        
        /* Add jQuery Easing Plugin if slide easing or fade easing have been set.
         * Script by George McGinley Smith  http://gsgd.co.uk/sandbox/jquery/easing/
         */
        if (strlen($this->ce_slider_jquery_slideEasing) || strlen($this->ce_slider_jquery_fadeEasing))
        {
            $GLOBALS['TL_MOOTOOLS']['ce_slider_jquery_easing']      = '<script src="system/modules/ce_slider_jquery/public/ce_slider_jquery.easing.min.js"></script>';
        }

        /*  Create templates  */
        if (($this->ce_slider_jquery_template_html != $this->strTemplate) && ($this->ce_slider_jquery_template_html != '')) 
        {
            $this->strTemplate          = $this->ce_slider_jquery_template_html;
        }
        $this->Template             = new FrontendTemplate($this->strTemplate);

        if (($this->ce_slider_jquery_template_css != $this->strTemplate) && ($this->ce_slider_jquery_template_css != '')) 
        {
            $this->strTemplate          = $this->ce_slider_jquery_template_css;
        }
        $this->TemplateCSS          = new FrontendTemplate($this->strTemplate);

        if (($this->ce_slider_jquery_template_js != $this->strTemplate) && ($this->ce_slider_jquery_template_js != '')) 
        {
            $this->strTemplate          = $this->ce_slider_jquery_template_js;
        }
        $this->TemplateJS           = new FrontendTemplate($this->strTemplate);
        
        $arrce_slider_jquery_Size       = unserialize($this->ce_slider_jquery_size);
        
        $this->Template->Output                 = 'start';
        $this->Template->Width                  = $arrce_slider_jquery_Size[0];
        $this->Template->Height                 = $arrce_slider_jquery_Size[1];
        $this->Template->Container              = $this->ce_slider_jquery_container;
        $this->Template->GenerateNextPrev       = $objStartElem->ce_slider_jquery_generateNextPrev;
        $this->Template->NextClass              = $objStartElem->ce_slider_jquery_next;
        $this->Template->PrevClass              = $objStartElem->ce_slider_jquery_prev;
        $this->Template->Pagination             = $objStartElem->ce_slider_jquery_pagination;
        $this->Template->GeneratePagination     = $objStartElem->ce_slider_jquery_generatePagination;
        $this->Template->PaginationClass        = $objStartElem->ce_slider_jquery_paginationClass;
        $this->Template->CurrentClass           = $objStartElem->ce_slider_jquery_currentClass;

        /* Select jQuery slider end element */
        $sliderEndElem      = $this->Database->prepare("SELECT sorting FROM tl_content WHERE pid=? AND invisible != 1 AND type = ? ORDER by sorting DESC")
        ->limit(1)
        ->execute($this->pid, 'ce_slider_jquery_end');

        if ($sliderEndElem->numRows < 1)
        {
            if (version_compare(VERSION, '2.10', '>')) {
                $this->addErrorMessage('The Content-Element ce_jquery_slider_end does not exist.');
            }
            $this->log('The Content-Element ce_jquery_slider_end does not exist.', 'ce_slider_jquery compile()', TL_ERROR);
            return;
        }


        /* Select all elements inside the slider */
        $sliderElements     = $this->Database->prepare("SELECT id, type, ce_slider_jquery_pagination, cssID FROM tl_content WHERE pid = ? AND invisible != 1 AND sorting > ? AND sorting < ? ORDER by sorting ASC")
        ->execute($this->pid, $this->sorting, $sliderEndElem->sorting);

        if ($sliderElements->numRows < 1)
        {
            if (version_compare(VERSION, '2.10', '>')) {
                $this->addErrorMessage('CE Slider jQuery does not contain any Content Element');
            }
            $this->log('CE Slider jQuery does not contain any Content Element', 'ce_slider_jquery compile()', TL_ERROR);
            return;
        }


        /* Check for nested start elements */
        $sliderNestedElements     = $this->Database->prepare("SELECT id FROM tl_content WHERE pid = ? AND type = ? AND invisible != 1 AND sorting > ? AND sorting < ? ORDER by sorting ASC")
        ->execute($this->pid, 'ce_slider_jquery_start', $this->sorting, $sliderEndElem->sorting);

        if ($sliderNestedElements->numRows > 0) {
            if (version_compare(VERSION, '2.10', '>')) {
                $this->addErrorMessage('Module ce_slider_jquery does not support nested start or end elements.');
            }
            $this->log('Module ce_slider_jquery does not support nested start or end elements.', 'ce_slider_jquery compile()', TL_ERROR);
            return;
        }


        /* Populate the CSS template and add it to the <head> */
        $this->TemplateCSS->Width               = $arrce_slider_jquery_Size[0];
        $this->TemplateCSS->Height              = $arrce_slider_jquery_Size[1];
        $this->TemplateCSS->Container           = $this->ce_slider_jquery_container;
        $this->TemplateCSS->Generate_PrevNext   = $this->ce_slider_jquery_generateNextPrev;
        $this->TemplateCSS->NextButton_Class    = $this->ce_slider_jquery_next;
        $this->TemplateCSS->PrevButton_Class    = $this->ce_slider_jquery_prev;
        $this->TemplateCSS->Pagination_Class    = $this->ce_slider_jquery_paginationClass;
        $this->TemplateCSS->Current_Class       = $this->ce_slider_jquery_currentClass;
        
        $GLOBALS['TL_HEAD'][]                   = $this->TemplateCSS->parse();

        /* Populate the javascript template and add to <head> */
        $this->TemplateJS->Width                = $arrce_slider_jquery_Size[0];
        $this->TemplateJS->Height               = $arrce_slider_jquery_Size[1];
        $this->TemplateJS->Container            = $this->ce_slider_jquery_container;
        $this->TemplateJS->Play                 = $this->ce_slider_jquery_play;
        $this->TemplateJS->Pause                = $this->ce_slider_jquery_pause;
        $this->TemplateJS->GenerateNextPrev     = $this->ce_slider_jquery_generateNextPrev;
        $this->TemplateJS->NextClass            = $this->ce_slider_jquery_next;
        $this->TemplateJS->PrevClass            = $this->ce_slider_jquery_prev;
        $this->TemplateJS->Pagination           = $this->ce_slider_jquery_pagination;
        $this->TemplateJS->GeneratePagination   = $this->ce_slider_jquery_generatePagination;
        $this->TemplateJS->PaginationClass      = $this->ce_slider_jquery_paginationClass;
        $this->TemplateJS->CurrentClass         = $this->ce_slider_jquery_currentClass;
        $this->TemplateJS->Effect               = strtolower(substr($this->ce_slider_jquery_effectOnPlay, 24).",".substr($this->ce_slider_jquery_effectOnNav, 24));
        $this->TemplateJS->SlideSpeed           = $this->ce_slider_jquery_slideSpeed;
        $this->TemplateJS->SlideEasing          = $this->ce_slider_jquery_slideEasing;
        $this->TemplateJS->FadeSpeed            = $this->ce_slider_jquery_fadeSpeed;
        $this->TemplateJS->FadeEasing           = $this->ce_slider_jquery_fadeEasing;
        $this->TemplateJS->Crossfade            = $this->ce_slider_jquery_crossfade;
        $this->TemplateJS->Start                = $this->ce_slider_jquery_start;
        $this->TemplateJS->Randomize            = $this->ce_slider_jquery_randomize;
        $this->TemplateJS->HoverPause           = $this->ce_slider_jquery_hoverPause;
        $this->TemplateJS->AutoHeight           = $this->ce_slider_jquery_autoHeight;
        $this->TemplateJS->AutoHeightSpeed      = $this->ce_slider_jquery_autoHeightSpeed;
        $this->TemplateJS->BigTarget            = $this->ce_slider_jquery_bigTarget;
        $this->TemplateJS->Preload              = $this->ce_slider_jquery_preload;
        if ($this->ce_slider_jquery_preloadimage)
        {
            $this->TemplateJS->PreloadImage     = $this->ce_slider_jquery_preloadimage;
        }
        else
        {
            $this->TemplateJS->PreloadImage     = TL_PATH.'/system/modules/ce_slider_jquery/public/img/loading.gif';
        }

        /* Parse the JS template and add it after jquery */
        $GLOBALS['TL_MOOTOOLS'][]               = $this->TemplateJS->parse();
    }
}

?>