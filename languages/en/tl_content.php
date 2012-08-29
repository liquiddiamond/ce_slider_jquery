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

$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_play_legend']			= 'Slideshow settings';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_navigation_legend']		= 'Navigation and pagination settings';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_visualization_legend']	= 'Visualization settings';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_effects_legend']		= 'Effects settings';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_controller_legend']		= 'Advanced settings';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_templates_legend']		= 'Templates settings';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_effect_slide']			= 'Slide';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_effect_fade']			= 'Fade';


/**
 * Palettes and subpalettes
 */

$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery']					= array('Slider jQuery', 'Create a slider using jQuery.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_startElem']			= array('Start', 'Starting element of type jQuery slider.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_endElem']			= array('End', 'Ending element of type jQuery slider.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_size']				= array('Size', 'Set the size of the slider.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_container']			= array('Slider container', 'Specify the ID of the slides container.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_play']				= array('Playback interval', 'Playback interval between a slide and the next (Default: 3000 milliseconds).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_pause']				= array('Pause after navigation', 'Duration of the pause after clicking on navigation (default: 0 milliseconds).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_generateNextPrev']	= array('Navigation buttons', 'Select to add the navigation (\'prev\' and \'next\') buttons.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_prev']				= array('\'previous\' arrow class', 'Specify the class for the container of the \'previous\' button.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_next']				= array('\'next\' arrow class', 'the class for the container of the arrow \'next\' button.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_pagination']		= array('Pagination', 'Select to enable slides pagination.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_generatePagination']= array('Auto-generate pagination', 'Select to auto-generate pagination buttons.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_paginationClass']	= array('Pagination item class', 'Specify a class for pagination buttons.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_currentClass']		= array('Active pagination item class', 'Specify a class for the active pagination buttons.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_effectOnPlay']		= array('Effect on play and navigation click', 'Select the effect to use while playing and after clicking on navigation buttons.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_effectOnNav']		= array('Effect on pagination click', 'Select the effect to use after clicking on navigation buttons.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_slideSpeed']		= array('Slide animation speed', 'Specify the slide animation speed (default: 350 milliseconds).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_slideEasing']		= array('Slide animation easing', 'Specify the slide easing effect (default: none).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_fadeSpeed']			= array('Fade animation speed', 'Specify the fade animation speed (default: 350 milliseconds).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_fadeEasing']		= array('Fade animation easing', 'Specify the fade easing effect (default: none).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_crossfade']			= array('Crossfade', 'Select to enable slides crossfading (works only with images).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_start']				= array('Starting slide', 'Specify the starting slide index (default: 1).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_randomize']			= array('Randomize', 'Select to randomize slides order.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_hoverPause']		= array('Pause on hover', 'Select to pause the animation on mousehover.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_bigTarget']			= array('Big Target', 'Select to make the whole slide link to next one on click.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_autoHeight']		= array('Auto-height', 'Select to auto-adjust content height.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_autoHeightSpeed']	= array('Auto-height speed', 'Specify the auto-height animation time (default: 350 milliseconds).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_preload']			= array('Preload', 'Select to activate content preload.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_preloadimage']		= array('Preloader image', 'Select a custom animated image to show on preload.');
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

$GLOBALS['TL_LANG']['ERR']['ce_slider_jquery_generatePaginationErr']	= 'Auto-generate pagination is already active.';
$GLOBALS['TL_LANG']['ERR']['ce_slider_jquery_cssIDExists']				= 'CSS Slider ID already exists.';
?>