<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('root', $root);
Yii::setPathOfAlias('common', $common);
Yii::setPathOfAlias('frontend', $frontend);

$commonConfigFile = $common . DS . 'config' . DS . 'commonConfig.php';
$commonConfig = file_exists($commonConfigFile) ? require($commonConfigFile) : array();
$commonParamsFile = $common . DS . 'config' . DS . 'commonParams.php';
$commonParams = file_exists($commonParamsFile) ? require($commonParamsFile) : array();

$frontendParamsFile = $frontend . DS . 'config' . DS . 'frontendParams.php';
$frontendParams = file_exists($frontendParamsFile) ? require($frontendParamsFile) : array();

return CMap::mergeArray($commonConfig, array(
	'basePath' => $frontend,
	'name' => '舜网用户接口',

	'modules' => array(
	),

	'components' => array(
	),

	'params' => CMap::mergeArray($commonParams, $frontendParams),
));