<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('root', $root);
Yii::setPathOfAlias('common', $common);
Yii::setPathOfAlias('backend', $backend);

$commonConfigFile = $common . DS . 'config' . DS . 'commonConfig.php';
$commonConfig = file_exists($commonConfigFile) ? require($commonConfigFile) : array();
$commonParamsFile = $common . DS . 'config' . DS . 'commonParams.php';
$commonParams = file_exists($commonParamsFile) ? require($commonParamsFile) : array();

$backendParamsFile = $backend . DS . 'config' . DS . 'backendParams.php';
$backendParams = file_exists($backendParamsFile) ? require($backendParamsFile) : array();

return CMap::mergeArray($commonConfig, array(
	'basePath' => $backend,
	'name' => '舜网用户管理系统',

	'modules' => array(
	),

	'components' => array(
	),

	'params' => CMap::mergeArray($commonParams, $backendParams),
));