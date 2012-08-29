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
 * 			   Nathan Searles <http://nathansearles.com>
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
 * Class CESliderJqueryEnd
 *
 * @copyright  Liquid Diamond 2011-2012
 * @author     Andrea Collet <collet.andrea@gmail.com>
 * @package    ce_slider_jquery
 */
class CESliderJqueryEnd extends ContentElement
{

	/**
	 * Display a wildcard in the back end
	 * @return public
	 */
	public function generate()
	{

		if(TL_MODE == 'BE')
		{
			$this->Template = new BackendTemplate('be_wildcard');
			$this->Template->wildcard = '### CE Slider jQuery '.sprintf($GLOBALS['TL_LANG']['MSC']['ce_slider_jquery_endElem']);

			return $this->Template->parse();
		}
		return parent::generate();
	}

	/**
	 * Compile module
	 */
	protected function compile()
	{

        /*	Set global plugins url  */
        if(!defined(TL_PLUGINS_URL)){
        	define('TL_PLUGINS_URL', ($GLOBALS['TL_CONFIG']['staticPlugins'] != '' && !$GLOBALS['TL_CONFIG']['debugMode']) ? $GLOBALS['TL_CONFIG']['staticPlugins'] . TL_PATH . '/' : '');
        }
        if (version_compare(VERSION, '2.10', '>')) {
            $this->setStaticUrl('TL_PLUGINS_URL', $GLOBALS['TL_CONFIG']['staticPlugins']);
        }

		/* get StartElement */
		$objStartElem = $this->Database->prepare("SELECT * FROM tl_content WHERE pid = ? AND invisible != 1 AND type = ? ORDER by sorting DESC")
							 ->limit(1)->execute($this->pid, 'ce_slider_jquery_start');
		
		if ($objStartElem->numRows < 1)
		{
			if (version_compare(VERSION, '2.10', '>')) {
				$this->addErrorMessage('The Content-Element ce_jquery_slider_start does not exist.');
			}
            $this->log('The Content-Element ce_jquery_slider_start does not exist.', 'ce_slider_jquery compile()', TL_ERROR);
            return;
		}


		/* Check for nested start elements */
		if ($objStartElem->numRows > 1)
		{
			if (version_compare(VERSION, '2.10', '>')) {
				$this->addErrorMessage('Module ce_slider_jquery does not support nested start or end elements.');
			}
            $this->log('Module ce_slider_jquery does not support nested start or end elements.', 'ce_slider_jquery compile()', TL_ERROR);
            return;
		}
	}
}

?>