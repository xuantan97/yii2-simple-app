<?php

require(__DIR__ . '/../../vendor/autoload.php');
require_once(__DIR__ . '/../../common/config/env.php');
define('YII_DEBUG', getenv('YII_DEBUG'));
define('YII_ENV', getenv('YII_ENV'));

// Yii
require(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');

// Bootstrap application
require(__DIR__ . '/../../common/config/bootstrap.php');
require(__DIR__ . '/../config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../../common/config/main.php',
    require __DIR__ . '/../../common/config/main-local.php',
    require(__DIR__ . '/../config/base.php'),
    require(__DIR__ . '/../config/web.php')
);

(new yii\web\Application($config))->run();
