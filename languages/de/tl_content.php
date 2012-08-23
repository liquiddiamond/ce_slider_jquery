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

$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_play_legend']		= 'Diashow-Einstellungen';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_controls']			= 'Navigation und Einstellungen Paginierung';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_visualization']		= 'Einstellungen Visualisierung';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_templates_legend']	= 'Vorlagen-Einstellungen';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_styling_legend']	= 'Erweiterte Einstellungen';


/**
 * Palettes and subpalettes
 */

$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery']					= array('Slider jQuery', 'Erstellen Sie einen Schieberegler, der die jQuery-Bibliothek verwendet.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_elemType']			= array('Item-Typ', 'Gibt an, ob der Anfang oder das Ende dessen, was in den Regler sind anzugeben.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_startElem']			= array('Start', 'Erstellen Sie ein Element des Typs jQuery Slider.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_endElem']			= array('Ende', 'Begrenzen Sie die Elemente in der jQuery Slider einbezogen werden.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_size']				= array('Größe', 'Legen Sie die Größe des Schiebers.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_container']			= array('Slider-Container', 'Geben Sie die ID der Folien-Container.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_play']				= array('Wiedergabeintervall', 'Playback Intervall zwischen einer Folie und die nächste (Standard: 3000 Millisekunden).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_pause']				= array('Pause nach Schieberöffnung', 'Dauer der Pause nach dem Erscheinen eines Dias (Standard: 0 Millisekunden).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_generateNextPrev']	= array('Verwenden Sie Navigations-Pfeile', 'Wählen Sie die Navigationspfeile hinzuzufügen.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_prev']				= array('\'früheren\'-Pfeil-Klasse', 'Geben Sie die Klasse für den Container des Pfeils \'früheren\'.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_next']				= array('\'nächsten\'-Pfeil-Klasse', 'Geben Sie die Klasse für den Container des Pfeils \'nächsten\'.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_prevImg']			= array('\'früheren\' Pfeil Bild', 'Geben Sie das Bild des \'früheren\' Pfeil.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_nextImg']			= array('\'nächsten\' Pfeil Bild', 'Geben Sie das Bild des \'nächsten\' Pfeil.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_pagination']		= array('Verwenden Sie Paginierung', 'Wählen Sie die Seitenzahl hinzuzufügen.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_generatePagination']= array('Autogenerate Paginierung', 'Wählen Sie zum automatischen Generieren Paginierung.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_paginationClass']	= array('Pagination Element-Klasse', 'Geben Sie die Klasse für die Paginierung Artikel.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_currentClass']		= array('Aktive Paginierung Element-Klasse', 'Geben Sie die Klasse für die aktive Paginierung Artikel.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_start']				= array('Start von slide', 'Geben Sie den Startindex (Standard: 1).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_useSlide']			= array('Übernehmen slide', 'Wählen Sie Folienanimationen ermöglichen.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_slideSpeed']		= array('Animations-Geschwindigkeit', 'Geben Sie die Geschwindigkeit der Bewegung (Standard: 350 Millisekunden).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_slideEasing']		= array('Animation Lockerung', 'Geben Sie die Animation Beschleunigungseffekt (Standard: keiner).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_useFade']			= array('Übernehmen fade.', 'Wählen Sie Fade-Effekt zu ermöglichen.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_fadeSpeed']			= array('Fade Geschwindigkeit', 'Geben Sie die Fade-Geschwindigkeit (Standard: 350 Millisekunden).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_fadeEasing']		= array('Fade Lockerung', 'Geben Sie die fade Beschleunigungseffekt (Standard: keiner).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_crossfade']			= array('Crossfade', 'Wählen Sie den Folien Überblenden ermöglichen.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_randomize']			= array('Randomize', 'Wählen Sie den Folien randomize.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_hoverPause']		= array('Pause auf hover', 'Wählen Sie zum Anhalten der Animation auf MouseHover.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_bigTarget']			= array('Big Ziel', 'Wählen Sie die gesamte Folie Link, um das nächste auf Mausklick.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_autoHeight']		= array('AutoHöhe', 'Wählen Sie die automatische Höheneinstellung.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_autoHeightSpeed']	= array('AutoHöhe Geschwindigkeit', 'Geben Sie die autoHöhe Animation Zeit (Standard: 350 Millisekunden).');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_template_html']		= array('HTML5 Template', 'Geben Sie HTML5 Template.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_template_js']		= array('JavaScript Template', 'Geben Sie JavaScript Template.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_template_css']		= array('CSS Template', 'Geben Sie CSS Template.');
$GLOBALS['TL_LANG']['tl_content']['none']								= 'Keiner';


/**
 * Error Messages
 */

$GLOBALS['TL_LANG']['ERR']['ce_slider_jquery_generatePaginationErr']	= 'Pagination Auto-Generation ist bereits aktiv.';
$GLOBALS['TL_LANG']['ERR']['ce_slider_jquery_cssIDExists']				= 'CSS-ID ist bereits vorhanden.';
$GLOBALS['TL_LANG']['ERR']['ce_slider_jquery_module_error']				= 'Il content element ce_jquery_slider non esiste.';

?>