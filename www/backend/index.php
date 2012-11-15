<?php
defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
// On dev display all errors
if(YII_DEBUG) {
	error_reporting(-1);
	ini_set('display_errors', true);
}

$root = dirname(__FILE__).'/../..';
$common = $root . '/common';
$backend = $root . '/backend';
$core = $root . '/core';

require($core . '/framework/yii.php');
require($core . '/shortcut.php');

$config = require($backend . '/config/backendConfig.php');
Yii::createWebApplication($config)->run();
