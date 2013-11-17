<?php
//no direct access
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
 
 
$mod_name = "mod_socialslider";
$moduleclass_sfx = $params->get('moduleclass_sfx');
$template = $params->get('template', 'default');
$duration = $params->get('duration', '500');
$topMargin = $params->get('topMargin', '30');
$topLimit = $params->get('topLimit', '200');
$leftRight = $params->get('left-right');

$twittername = $params->get('twittername');
$twitter_btn = $params->get('twitter-btn');

require(JModuleHelper::getLayoutPath($mod_name,$template.DS.'default'));
?>
