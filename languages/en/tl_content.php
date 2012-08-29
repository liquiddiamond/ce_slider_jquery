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
 * @package    ce_slider_jquery
 * @license    GPL
 */


/**
 * Legeneds
 */

$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_play_legend']		= 'Slideshow settings';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_controls']			= 'Navigation and pagination settings';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_visualization']		= 'Visualization settings';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_templates_legend']	= 'Templates settings';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_styling_legend']	= 'Advanced settings';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_effect_slide']		= 'Slide';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_effect_fade']		= 'Fade';


/**
 * Palettes and subpalettes
 */

$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery']					= array('Slider jQuery', 'Create a slider that uses the jQuery library.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_elemType']			= array('Item type', 'Specifies whether the slider should begin and end.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_startElem']			= array('Start', 'Create an element of type jQuery slider.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_endElem']			= array('End', 'Limit the items to be included in the jQuery slider.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_size']				= array('Size', 'Set the size of the slider.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_container']			= array('Slider container', 'Specify the ID of the slides container.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_play']				= array('Playback interval', 'Playback interval between a slide and the next (Default: 3000 milliseconds).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_pause']				= array('Pause after slide opening', 'Duration of the pause after the appearance of a slide (default: 0 milliseconds).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_generateNextPrev']	= array('Use navigation arrows', 'Select to add the navigation arrows.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_prev']				= array('\'previous\' arrow class', 'Specify the class for the container of the arrow \'previous\'.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_next']				= array('\'next\' arrow class', 'the class for the container of the arrow \'next\'.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_pagination']		= array('Use pagination', 'Select to add pagination.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_generatePagination']= array('Autogenerate pagination', 'Select to auto-generate pagination.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_paginationClass']	= array('Pagination item class', 'Specify the class for pagination items.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_currentClass']		= array('Active pagination item class', 'Specify the class for active pagination items.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_effectOnPlay']		= array('Effect on play', 'Select the effect to use while playing');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_effectOnNav']		= array('Effect on navigation', 'Select the effect to use after clicking on navigation');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_slideSpeed']		= array('Slide animation speed', 'Specify the slide animation speed (default: 350 milliseconds).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_slideEasing']		= array('Slide animation easing', 'Specify the slide easing effect (default: none).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_fadeSpeed']			= array('Fade animation speed', 'Specify the fade animation speed (default: 350 milliseconds).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_fadeEasing']		= array('Fade animation easing', 'Specify the fade easing effect (default: none).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_crossfade']			= array('Crossfade', 'Select to enable slides crossfading.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_start']				= array('Start from slide', 'Specify the starting index (default: 1).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_randomize']			= array('Randomize', 'Select to randomize slides.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_hoverPause']		= array('Pause on hover', 'Select to pause the animation on mousehover.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_bigTarget']			= array('Big Target', 'Select to make the whole slide link to next one on click.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_autoHeight']		= array('Auto-height', 'Select to auto adjust height.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_autoHeightSpeed']	= array('Auto-height speed', 'Specify the auto-height animation time (default: 350 milliseconds).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_template_html']		= array('HTML5 Template', 'Specify HTML5 template.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_template_js']		= array('JavaScript Template', 'Specify JavaScript template.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_template_css']		= array('CSS Template', 'Specify CSS template.');
$GLOBALS['TL_LANG']['tl_content']['none']								= 'None';


/**
 * Misc Messages
 */

$GLOBALS['TL_LANG']['MSC']['ce_slider_jquery_startElem']				= 'Start';
$GLOBALS['TL_LANG']['MSC']['ce_slider_jquery_endElem']					= 'End';


/**
 * Error Messages
 */

$GLOBALS['TL_LANG']['ERR']['ce_slider_jquery_generatePaginationErr']	= 'Pagination auto-generation is already active.';
$GLOBALS['TL_LANG']['ERR']['ce_slider_jquery_cssIDExists']				= 'CSS Slider ID already exists.';
$GLOBALS['TL_LANG']['ERR']['ce_slider_jquery_no_start_element']			= 'The Content-Element ce_jquery_slider_start does not exist.';
$GLOBALS['TL_LANG']['ERR']['ce_slider_jquery_no_end_element']			= 'The Content-Element ce_jquery_slider_end does not exist.';
$GLOBALS['TL_LANG']['ERR']['ce_slider_jquery_no_nested_elements']		= 'Module ce_slider_jquery does not support nested start or end elements.';
$GLOBALS['TL_LANG']['ERR']['ce_slider_jquery_no_elements']				= 'CE Slider jQuery does not contain any Content Element';
?>