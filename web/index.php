<?php
require_once __DIR__ . "/../config/init.php";

require PROJECT_DIR . '/vendor/autoload.php';
require PROJECT_DIR . "/config/env.php";

require PROJECT_DIR . '/vendor/yiisoft/yii2/Yii.php';
require PROJECT_DIR . "/config/bootstrap.php";

if (YII_ENV_DEV === true) {
    hiqdev\composer\config\Builder::rebuild();
}

$config = require_once hiqdev\composer\config\Builder::path('app');

(new yii\web\Application($config))->run();