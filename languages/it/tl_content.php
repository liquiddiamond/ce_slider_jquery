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

$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_play_legend']		= 'Impostazioni di riproduzione';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_controls']			= 'Impostazioni di navigazione e paginazione';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_visualization']		= 'Impostazioni di visualizzazione';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_templates_legend']	= 'Impostazioni templates';
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_styling_legend']	= 'Impostazioni avanzate';


/**
 * Palettes and subpalettes
 */

$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery']					= array('Slider jQuery', 'Crea uno slider che sfrutta le librerie jQuery.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_elemType']			= array('Tipologia di elemento', 'Specifica se indicare l\'inizio o la fine degli elementi da includere nello slider.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_startElem']			= array('Inizio slider jQuery', 'Crea un elemento di tipo slider jQuery.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_endElem']			= array('Fine slider jQuery', 'Limite degli elementi da includere nello slider jQuery.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_size']				= array('Dimensioni slider', 'Impostare le dimensioni dello slider.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_container']			= array('Contenitore slider', 'Specificare l\'ID del contenitore di slides.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_play']				= array('Intervallo di riproduzione', 'Intervallo di riproduzione tra una slide e la successiva. Predefinito: 3000 millisecondi.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_pause']				= array('Pausa dopo l\'apertura di una slide', 'Durata della pausa dopo la navigazione su una slide. Predefinito: 1500 millisecondi.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_generateNextPrev']	= array('Aggiungi frecce di navigazione', 'Selezionare per aggiungere le frecce di navigazione.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_prev']				= array('Classe freccia \'precedente\'', 'Specificare la classe per il contenitore della freccia \'precedente\'.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_next']				= array('Classe freccia \'successivo\'', 'Specificare la classe per il contenitore della freccia \'successivo\'.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_prevImg']			= array('Immagine freccia \'precedente\'', 'Selezionare l\'immagine per la freccia \'precedente\'.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_nextImg']			= array('Immagine freccia \'successivo\'', 'Selezionare l\'immagine per la freccia \'successivo\'.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_pagination']		= array('Aggiungi paginazione', 'Selezionare per aggiungere la paginazione.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_generatePagination']= array('Autogenera paginazione', 'Seelzionare per autogenerare la paginazione.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_paginationClass']	= array('Classe elemento di paginazione', 'Specificare la classe dell\'elemento di paginazione.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_currentClass']		= array('Classe elemento di paginazione attivo', 'Specificare la classe dell\'elemento attivo.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_start']				= array('Indice dello slide di partenza', 'Specificare l\'indice della slide di partenza. Predefinito: 1.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_useSlide']			= array('Usa slide', 'Selezionare per abilitare l\' effetto slide.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_slideSpeed']		= array('Velocità di slide', 'Specificare la velocità con cui applicare l\'effetto di slide. Predefinito: 350 millisecondi.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_slideEasing']		= array('Allentamento slide', 'Specificare il tipo di allentamento con cui applicare l\'effetto di slide. Predefinito: nessuno.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_useFade']			= array('Usa dissolvenza', 'Selezionare per abilitare l\'effetto dissolvenza.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_fadeSpeed']			= array('Velocità di dissolvenza', 'Specificare la velocità con cui applicare l\'effetto di dissolvenza. Predefinito: 350 millisecondi.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_fadeEasing']		= array('Allentamento dissolvenza', 'Specificare il tipo di allentamento con cui applicare l\'effetto di dissolvenza. Predefinito: nessuno.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_crossfade']			= array('Dissolvenza incrociata', 'Selezionare per abilitare la dissolvenza incrociata delle slides.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_randomize']			= array('Ordine casuale', 'Selezionare per mescolare l\'ordine delle slides.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_hoverPause']		= array('Pausa se hover', 'Selezionare per abilitare la pausa dell\'animazione quando il mouse si posiziona sopra i contenuti.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_bigTarget']			= array('Click grande', 'Selezionare per abilitare l\'avanzamento dell\'animazione quando vengono cliccati i contenuti.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_autoHeight']		= array('Adatta altezza', 'Selezionare per abilitare l\'auto-adattamento dell\'altezza ad ogni slide.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_autoHeightSpeed']	= array('Velocità di adatta altezza', 'Specificare la velocità con cui applicare l\'animazione di auto-adattamento dell\' altezza.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_template_html']		= array('Template HTML5', 'Specificare il template HTML5.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_template_js']		= array('Template JavaScript', 'Specificare il template JavaScript.');
$GLOBALS['TL_LANG']['tl_content']['ce_slider_jquery_template_css']		= array('Template CSS', 'Specificare il template CSS.');
$GLOBALS['TL_LANG']['tl_content']['none']								= 'Nessuno';


/**
 * Error Messages
 */

$GLOBALS['TL_LANG']['ERR']['ce_slider_jquery_generatePaginationErr']	= 'L\'autogenerazione della paginazione è già attivata';
$GLOBALS['TL_LANG']['ERR']['ce_slider_jquery_cssIDExists']				= 'CSS ID già esistente';
$GLOBALS['TL_LANG']['ERR']['ce_slider_jquery_module_error']				= 'Il content element ce_jquery_slider non esiste.';

?>