<?php
/**
 * @version		$Id: mod_subtable.php 786 2018-5-05 17:40:09 kaushik.shivendra@gmail.com
 * @package		Subtable v3.01
 * @author		Umika Technologies LLP https://www.umikatechnologies.com
 * @copyright	Copyright (c) 2012 Umika Technologies LLP. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die('Restricted access'); // no direct access

require_once __DIR__ . '/helper.php';
$item = modSubtableHelper::getItem($params);
 if(($params->get( 'Select_template' ) == '') || ($params->get( 'Select_template' ) == 'Default') || ($params->get( 'Select_template' ) == 'style2')){ 
require(JModuleHelper::getLayoutPath('mod_subtable'));
require_once ('helper.php');
}


?>