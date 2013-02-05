<?php
/**
 * @version		$Id: mod_subtable.php 786 2012-10-05 17:40:09 kaushik.shivendra@gmail.com
 * @package		Subtable v2.01
 * @author		3stechnosolutions http://www.3stechnosolutions.com
 * @copyright	Copyright (c) 2012 3stechnosolutions Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */
defined('_JEXEC') or die('Restricted access'); // no direct access

require_once (dirname(__FILE__).DS.'helper.php');
$item = modSubtableHelper::getItem($params);
 if(($params->get( 'Select_template' ) == '') || ($params->get( 'Select_template' ) == 'Default') || ($params->get( 'Select_template' ) == 'style2')){ 
require(JModuleHelper::getLayoutPath('mod_subtable'));
require_once ('helper.php');
}
if ($params->get( 'Select_template' ) == 'style3'){
require(JModuleHelper::getLayoutPath('mod_subtable','style_clean'));
require_once ('helper.php');
}
?>
