<?php
defined('PROJECT_DIR') or define('PROJECT_DIR', dirname(__DIR__));

require PROJECT_DIR . '/vendor/autoload.php';
require PROJECT_DIR . '/config/primary/env.php';

require PROJECT_DIR . '/vendor/yiisoft/yii2/Yii.php';
require PROJECT_DIR . '/config/primary/bootstrap.php';

$config = \yii\helpers\ArrayHelper::merge(
    require PROJECT_DIR . '/config/common.php',
    require PROJECT_DIR . '/config/app.php'
);

(new yii\web\Application($config))->run();