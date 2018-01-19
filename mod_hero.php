<?php
# @Author: SPEDI srl
# @Date:   19-01-2018
# @Email:  sviluppo@spedi.it
# @Last modified by:   SPEDI srl
# @Last modified time: 19-01-2018
# @License: GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
# @Copyright: Copyright (C) SPEDI srl

defined('_JEXEC') or die;

JLoader::register('ModHeroHelper', __DIR__ . '/helper.php');

/* params */
// $hero_title       = $params->get('hero-title');
$hero_caption     = $params->get('hero-caption');
$hero_image       = $params->get('hero-image');
$hero_overlay_yn  = $params->get('hero-overlay-yn');
$hero_overlay     = $params->get('hero-overlay');
$hero_pattern_yn  = $params->get('hero-pattern-yn');
/* button */
$hero_button_yn   = $params->get('hero-button-yn');
$hero_button_text = $params->get('hero-button-text');
$hero_button_link = $params->get('hero-button-link');
/* style */
$hero_height      = $params->get('hero-height');
$hero_align      = $params->get('hero-align');

$document = JFactory::getDocument();

if($hero_overlay_yn){
  $rgb = ModHeroHelper::hexToRGB($hero_overlay);

  $style = ".hero::before{
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(".$rgb.", 0.5);
  }";
   $document->addStyleDeclaration($style);
}

if($hero_pattern_yn){
  $style = ".hero::after{
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('".JUri::base(true)."/modules/".$module->module."/images/pattern.png') repeat;
  }";
  $document->addStyleDeclaration($style);
}

/* style */
$document->addStyleSheet(JUri::base(true).'/modules/'.$module->module.'/css/'.$module->module.'.min.css');
require JModuleHelper::getLayoutPath($module->module, $params->get('layout', 'default'));
