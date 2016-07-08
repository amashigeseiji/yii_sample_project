<?php
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

// change the following paths if necessary
$current = dirname(__FILE__);

require_once $current . '/../vendor/yiisoft/yii/framework/yii.php';
require_once $current . '/../vendor/autoload.php';
require_once $current . '/../vendor/codeception/YiiBridge/yiit.php';

$config = require $current . '/../sample/protected/config/main.php';
// for codeception
$config['components']['request']['class'] = 'CodeceptionHttpRequest';

return array(
       'class' => 'CWebApplication',
       'config' => $config,
);
