-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************


-- --------------------------------------------------------

-- 
-- Table `tl_content`
-- 

CREATE TABLE `tl_content` (
  `ce_slider_jquery_size` varchar(255) NOT NULL default '',
  `ce_slider_jquery_preload` char(1) NOT NULL default '',
  `ce_slider_jquery_preloadimage` varchar(255) NOT NULL default '',
  `ce_slider_jquery_container` varchar(255) NOT NULL default '',  
  `ce_slider_jquery_play` int(10) unsigned NOT NULL default '3000',
  `ce_slider_jquery_pause` int(10) unsigned NOT NULL default '1500',
  `ce_slider_jquery_generateNextPrev` char(1) NOT NULL default '',
  `ce_slider_jquery_next` varchar(255) NOT NULL default '',
  `ce_slider_jquery_prev` varchar(255) NOT NULL default '',
  `ce_slider_jquery_pagination` char(1) NOT NULL default '',
  `ce_slider_jquery_generatePagination` char(1) NOT NULL default '',
  `ce_slider_jquery_paginationClass` varchar(255) NOT NULL default '',
  `ce_slider_jquery_currentClass` varchar(255) NOT NULL default '',
  `ce_slider_jquery_effectOnPlay` varchar(255) NOT NULL default '',
  `ce_slider_jquery_effectOnNav` varchar(255) NOT NULL default '',
  `ce_slider_jquery_slideSpeed` int(10) unsigned NOT NULL default '350',
  `ce_slider_jquery_slideEasing` varchar(255) NOT NULL default '',
  `ce_slider_jquery_fadeSpeed` int(10) unsigned NOT NULL default '350',
  `ce_slider_jquery_fadeEasing` varchar(255) NOT NULL default '',
  `ce_slider_jquery_crossfade` char(1) NOT NULL default '',
  `ce_slider_jquery_start` int(10) unsigned NOT NULL default '1',
  `ce_slider_jquery_randomize` char(1) NOT NULL default '',
  `ce_slider_jquery_hoverPause` char(1) NOT NULL default '',
  `ce_slider_jquery_autoHeight` char(1) NOT NULL default '',
  `ce_slider_jquery_autoHeightSpeed` int(10) unsigned NOT NULL default '350',
  `ce_slider_jquery_bigTarget` char(1) NOT NULL default '',
  `ce_slider_jquery_animationStart` varchar(255) NOT NULL default '',
  `ce_slider_jquery_animationComplete` varchar(255) NOT NULL default '',
  `ce_slider_jquery_template_html` varchar(255) NOT NULL default '',
  `ce_slider_jquery_template_css` varchar(255) NOT NULL default '',
  `ce_slider_jquery_template_js` varchar(255) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

