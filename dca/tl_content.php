<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

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

 
/*****************
 * Palettes
 *****************/

// Slideshow start element
$GLOBALS['TL_DCA']['tl_content']['palettes']['ce_slider_jquery_start']                  = '{type_legend}, type;
                                                                                           {ce_slider_jquery_play_legend}, ce_slider_jquery_size, ce_slider_jquery_container, ce_slider_jquery_play, ce_slider_jquery_pause;
                                                                                           {ce_slider_jquery_navigation_legend}, ce_slider_jquery_generateNextPrev, ce_slider_jquery_pagination;
                                                                                           {ce_slider_jquery_effects_legend}, ce_slider_jquery_effectOnPlay, ce_slider_jquery_effectOnNav, ce_slider_jquery_slideSpeed, ce_slider_jquery_slideEasing, ce_slider_jquery_fadeSpeed, ce_slider_jquery_fadeEasing, ce_slider_jquery_crossfade;
                                                                                           {ce_slider_jquery_visualization_legend}, ce_slider_jquery_start, ce_slider_jquery_randomize, ce_slider_jquery_hoverPause, ce_slider_jquery_bigTarget, ce_slider_jquery_autoHeight, ce_slider_jquery_autoHeightSpeed;
                                                                                           {ce_slider_jquery_controller_legend},
                                                                                               ce_slider_jquery_preload,
                                                                                               ce_slider_jquery_preloadImage;
                                                                                           {ce_slider_jquery_templates_legend}, ce_slider_jquery_template_html, ce_slider_jquery_template_js, ce_slider_jquery_template_css;
                                                                                           {protected_legend:hide}, guests, protected; {expert_legend:hide}, align, space, cssID';
// Slideshow end element
$GLOBALS['TL_DCA']['tl_content']['palettes']['ce_slider_jquery_end']                    = '{type_legend}, type;';

// Navigation selectors
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][]                          = 'ce_slider_jquery_generateNextPrev';

// Pagination selectors
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][]                          = 'ce_slider_jquery_pagination';


/*****************
 * Subpalettes
 *****************/

// Navigation
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['ce_slider_jquery_generateNextPrev']    = 'ce_slider_jquery_prev, ce_slider_jquery_next';

// Pagination
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['ce_slider_jquery_pagination']          = 'ce_slider_jquery_generatePagination, ce_slider_jquery_paginationClass, ce_slider_jquery_currentClass';


/*****************
 * Fields
 *****************/
 
/* {ce_slider_jquery_play_legend} */

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_size'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_size'],
    'inputType'     => 'text',
    'default'       => array('640', '220'),
    'eval'          => array('maxlength'=>4, 'mandatory'=>true, 'rgxp'=>'digit', 'multiple'=>true, 'size'=>2, 'nospace'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_container'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_container'],
    'inputType'     => 'text',
    'eval'          => array('mandatory'=>true, 'nospace'=>true, 'tl_class'=>'w50'),
    'load_callback' => array( array('tl_slider_jquery', 'checkIDContainer') )
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_play'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_play'],
    'inputType'     => 'text',
    'default'       => '3000',
    'eval'          => array('maxlength'=>4, 'mandatory'=>true, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_pause'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_pause'],
    'inputType'     => 'text',
    'default'       => '0',
    'eval'          => array('maxlength'=>4, 'mandatory'=>true, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50')
);


/* {ce_slider_jquery_navigation_legend} */

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_generateNextPrev'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_generateNextPrev'],
    'inputType'     => 'checkbox',
    'default'       => true,
    'eval'          => array('submitOnChange'=>true, 'tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_prev'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_prev'],
    'inputType'     => 'text',
    'default'       => 'slider_prev_arrow',
    'eval'          => array('maxlength'=>255, 'rgxp'=>'alnum', 'nospace'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_next'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_next'],
    'inputType'     => 'text',
    'default'       => 'slider_next_arrow',
    'eval'          => array('maxlength'=>255, 'rgxp'=>'alnum', 'nospace'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_pagination'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_pagination'],
    'inputType'     => 'checkbox',
    'default'       => false,
    'eval'          => array('submitOnChange'=>true, 'tl_class'=>'clr'),
    'save_callback' => array( array('tl_slider_jquery', 'checkPagination'))
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_generatePagination'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_generatePagination'],
    'inputType'     => 'checkbox',
    'default'       => false,
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_paginationClass'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_paginationClass'],
    'inputType'     => 'text',
    'default'       => 'slider_pagination',
    'eval'          => array('maxlength'=>255, 'rgxp'=>'alnum', 'nospace'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_currentClass'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_currentClass'],
    'inputType'     => 'text',
    'default'       => 'slider_current',
    'eval'          => array('maxlength'=>255, 'rgxp'=>'alnum', 'nospace'=>true, 'tl_class'=>'w50')
);


/* {ce_slider_jquery_effects_legend} */

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_effectOnPlay'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_effectOnPlay'],
    'inputType'     => 'radio',
    'exclude'       => true,
    'default'       => 'ce_slider_jquery_effect_slide',
    'reference'     => &$GLOBALS['TL_LANG']['tl_content'],
    'options'       => array('ce_slider_jquery_effect_slide', 'ce_slider_jquery_effect_fade'),
    'eval'          => array('multiple'=>true, 'tl_class'=>'clr w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_effectOnNav'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_effectOnNav'],
    'inputType'     => 'radio',
    'exclude'       => true,
    'default'       => 'ce_slider_jquery_effect_slide',
    'reference'     => &$GLOBALS['TL_LANG']['tl_content'],
    'options'       => array('ce_slider_jquery_effect_slide', 'ce_slider_jquery_effect_fade'),
    'eval'          => array('multiple'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_slideSpeed'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_slideSpeed'],
    'inputType'     => 'text',
    'default'       => '350',
    'eval'          => array('maxlength'=>4, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'clr w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_slideEasing'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_slideEasing'],
    'inputType'     => 'select',
    'options'       => array('easeInQuad', 'easeOutQuad', 'easeInOutQuad', 'easeInCubic', 'easeOutCubic', 'easeInOutCubic', 'easeInQuart', 'easeOutQuart', 'easeInOutQuart', 'easeInQuint', 'easeOutQuint', 'easeInOutQuint', 'easeInSine', 'easeOutSine', 'easeInOutSine', 'easeInExpo', 'easeOutExpo', 'easeInOutExpo', 'easeInCirc', 'easeOutCirc', 'easeInOutCirc', 'easeInElastic', 'easeOutElastic', 'easeInOutElastic', 'easeInBack', 'easeOutBack', 'easeInOutBack', 'easeInBounce', 'easeOutBounce', 'easeInOutBounce'),
    'eval'          => array('includeBlankOption'=>true, 'blankOptionLabel'=>$GLOBALS['TL_LANG']['tl_content']['none'], 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_fadeSpeed'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_fadeSpeed'],
    'inputType'     => 'text',
    'default'       => '350',
    'eval'          => array('maxlength'=>4, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_fadeEasing'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_fadeEasing'],
    'inputType'     => 'select',
    'options'       => array('easeInQuad', 'easeOutQuad', 'easeInOutQuad', 'easeInCubic', 'easeOutCubic', 'easeInOutCubic', 'easeInQuart', 'easeOutQuart', 'easeInOutQuart', 'easeInQuint', 'easeOutQuint', 'easeInOutQuint', 'easeInSine', 'easeOutSine', 'easeInOutSine', 'easeInExpo', 'easeOutExpo', 'easeInOutExpo', 'easeInCirc', 'easeOutCirc', 'easeInOutCirc', 'easeInElastic', 'easeOutElastic', 'easeInOutElastic', 'easeInBack', 'easeOutBack', 'easeInOutBack', 'easeInBounce', 'easeOutBounce', 'easeInOutBounce'),
    'eval'          => array('includeBlankOption'=>true, 'blankOptionLabel'=>$GLOBALS['TL_LANG']['tl_content']['none'], 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_crossfade'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_crossfade'],
    'inputType'     => 'checkbox',
    'default'       => false,
    'eval'          => array('tl_class'=>'m12')
);


/* {ce_slider_jquery_visualization_legend} */

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_start'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_start'],
    'inputType'     => 'text',
    'default'       => '1',
    'eval'          => array('maxlength'=>4, 'rgxp'=>'digit', 'nospace'=>true)
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_randomize'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_randomize'],
    'inputType'     => 'checkbox',
    'default'       => false,
    'eval'          => array()
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_hoverPause'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_hoverPause'],
    'inputType'     => 'checkbox',
    'default'       => false,
    'eval'          => array('tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_bigTarget'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_bigTarget'],
    'inputType'     => 'checkbox',
    'default'       => false,
    'eval'          => array('tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_autoHeight'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_autoHeight'],
    'inputType'     => 'checkbox',
    'default'       => false,
    'eval'          => array('tl_class'=>'clr w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_autoHeightSpeed'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_autoHeightSpeed'],
    'inputType'     => 'text',
    'default'       => '350',
    'eval'          => array('maxlength'=>4, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50')
);


/* {ce_slider_jquery_controller_legend} */

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_preload'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_preload'],
    'inputType'     => 'checkbox',
    'default'       => false,
    'eval'          => array('tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_preloadImage'] = array (
    'label'         => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_preloadImage'],
    'inputType'     => 'fileTree',
    'eval'          => array('tl_class'=>'clr')
);


/* {ce_slider_jquery_templates_legend} */

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_template_html'] = array
(
  'label'           => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_template_html'],
  'default'         => 'ce_slider_jquery_html_default',
  'inputType'       => 'select',
  'eval'            => array('mandatory' => true),
  'options_callback'=> array('tl_slider_jquery', 'getHTMLTemplate')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_template_js'] = array
(
  'label'           => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_template_js'],
  'default'         => 'ce_slider_jquery_js_default',
  'inputType'       => 'select',
  'eval'            => array('mandatory' => true),
  'options_callback'=> array('tl_slider_jquery', 'getJSTemplate')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ce_slider_jquery_template_css'] = array
(
  'label'           => &$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_template_css'],
  'default'         => 'ce_slider_jquery_css_default',
  'inputType'       => 'select',
  'eval'            => array('mandatory' => true),
  'options_callback'=> array('tl_slider_jquery', 'getCSSTemplate')
);


/**
 * Class tl_slider_jquery
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Liquid Diamond 2011-2012
 * @author     Andrea Collet <collet.andrea@gmail.com>
 * @package    ce_slider_jquery 
 * @license    GPL 
 */
class tl_slider_jquery extends tl_content
{
    /**
     * Import the back end user object
     */
    public function __construct()
    {
        parent::__construct();
        $this->import('BackendUser', 'User');
    }

    /**
     * Disable autoPagination if pagination has been set to false
     * @param object
     * @return string
     */
    public function checkPagination($varValue, DataContainer $dc)
    {
        if (!strlen($varValue)) {
            $varValue      = standardize($dc->activeRecord->ce_slider_jquery_pagination);
        }
        
        $objPagination = $this->Database->prepare("SELECT ce_slider_jquery_pagination FROM tl_content WHERE id=?")->execute($dc->activeRecord->id);

        if ($objPagination->numRows > 1) {
            throw new Exception($GLOBALS['TL_LANG']['ERR']['ce_slider_jquery_generatePaginationErr']);
        }

        if ($objPagination && $dc->activeRecord->ce_slider_jquery_pagination == '') {
            $this->Database->prepare("UPDATE tl_content SET ce_slider_jquery_generatePagination=? WHERE id=?")->execute('', $dc->activeRecord->id);
        }

        return $varValue;
    }
    
    /**
     * Autocompose ID if the field is left emtpy
     * @param object
     * @return string
     */
    public function checkIDContainer($varValue, DataContainer $dc)
    {
        if (!strlen($varValue)) {
            $varValue   = 'slides_'.$dc->activeRecord->id;
        }

        $objCssID = $this->Database->prepare("SELECT ce_slider_jquery_container FROM tl_content WHERE id=?")->execute($dc->activeRecord->id);

        if ($objCssID->numRows > 1)
        {
            $this->log('"'.$GLOBALS['TL_LANG']['ERR']['ce_slider_jquery_generatePaginationErr'].$this->Input->get('pid').'"', 'ce_slider_jquery_container checkIDContainer', TL_ERROR);
            $this->redirect('contao/main.php?act=error');
        }

        if (!strlen($objCssID->ce_slider_jquery_container)) {
            $containerID    = 'slides_'.$dc->activeRecord->id;
            $varValue       = $containerID;
            $this->Database->prepare("UPDATE tl_content SET ce_slider_jquery_container=? WHERE id=?")->execute($containerID, $dc->activeRecord->id);
        }
        
        return $varValue;
    }
    
    /**
     * Return all ce_slider_jquery_html templates as array
     * @param object
     * @return array
     */
    public function getHTMLTemplate(DataContainer $dc)
    {
        $intPid = $dc->activeRecord->pid;
    
        if ($this->Input->get('act') == 'overrideAll')
        {
            $intPid = $this->Input->get('id');
        }

        // Get the page ID
        $objArticle = $this->Database->prepare("SELECT pid FROM tl_article WHERE id=?")
                           ->limit(1)
                           ->execute($dc->activeRecord->pid);

        // Inherit the page settings
        $objPage = $this->getPageDetails($objArticle->pid);

        // Get the theme ID
        $objLayout = $this->Database->prepare("SELECT pid FROM tl_layout WHERE id=?")
                          ->limit(1)
                          ->execute($objPage->layout);

        // Return all ce_slider_jquery html5 templates
        return $this->getTemplateGroup('ce_slider_jquery_html_', $objLayout->pid);

        /*if (version_compare(VERSION.BUILD, '2.9.0', '>='))
        {
            return $this->getTemplateGroup('ce_slider_jquery_html_', $intPid);
        }
        return $this->getTemplateGroup('ce_slider_jquery_html_');*/
    }
    
    /**
     * Return all ce_slider_jquery_js templates as array
     * @param object
     * @return array
     */
    public function getJSTemplate(DataContainer $dc)
    {
        $intPid = $dc->activeRecord->pid;
    
        if ($this->Input->get('act') == 'overrideAll')
        {
            $intPid = $this->Input->get('id');
        }

        // Get the page ID
        $objArticle = $this->Database->prepare("SELECT pid FROM tl_article WHERE id=?")
                           ->limit(1)
                           ->execute($dc->activeRecord->pid);

        // Inherit the page settings
        $objPage = $this->getPageDetails($objArticle->pid);

        // Get the theme ID
        $objLayout = $this->Database->prepare("SELECT pid FROM tl_layout WHERE id=?")
                          ->limit(1)
                          ->execute($objPage->layout);

        // Return all ce_slider_jquery javascript templates
        return $this->getTemplateGroup('ce_slider_jquery_js_', $objLayout->pid);


        /*if (version_compare(VERSION.BUILD, '2.9.0', '>='))
        {
            return $this->getTemplateGroup('ce_slider_jquery_js_', $intPid);
        }
        return $this->getTemplateGroup('ce_slider_jquery_js_');*/

    }
    
    /**
     * Return all ce_slider_jquery_css templates as array
     * @param object
     * @return array
     */
    public function getCSSTemplate(DataContainer $dc)
    {
        $intPid = $dc->activeRecord->pid;
    
        if ($this->Input->get('act') == 'overrideAll')
        {
            $intPid = $this->Input->get('id');
        }

        // Get the page ID
        $objArticle = $this->Database->prepare("SELECT pid FROM tl_article WHERE id=?")
                           ->limit(1)
                           ->execute($dc->activeRecord->pid);

        // Inherit the page settings
        $objPage = $this->getPageDetails($objArticle->pid);

        // Get the theme ID
        $objLayout = $this->Database->prepare("SELECT pid FROM tl_layout WHERE id=?")
                          ->limit(1)
                          ->execute($objPage->layout);

        // Return all ce_slider_jquery css templates
        return $this->getTemplateGroup('ce_slider_jquery_css_', $objLayout->pid);

        /*if (version_compare(VERSION.BUILD, '2.9.0', '>='))
        {
            return $this->getTemplateGroup('ce_slider_jquery_css_', $intPid);
        }
        return $this->getTemplateGroup('ce_slider_jquery_css_');*/
    }
}
?>