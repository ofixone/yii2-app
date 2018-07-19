<?php
defined('PROJECT_DIR') or define('PROJECT_DIR', dirname(__DIR__));

require PROJECT_DIR . '/vendor/autoload.php';
require PROJECT_DIR . "/config/env.php";

defined('YII_DEBUG') or define('YII_DEBUG', env('YII_DEBUG', true));
defined('YII_ENV') or define('YII_ENV', env('YII_ENV', 'dev'));

require PROJECT_DIR . '/vendor/yiisoft/yii2/Yii.php';
require PROJECT_DIR . "/config/bootstrap.php";

$config = yii\helpers\ArrayHelper::merge(
    require PROJECT_DIR . '/config/base.php',
    require PROJECT_DIR . '/config/app.php'
);

(new yii\web\Application($config))->run();