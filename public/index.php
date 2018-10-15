<?php
require_once __DIR__ . "/../config/init.php";

require PROJECT_DIR . '/vendor/autoload.php';
require PROJECT_DIR . "/config/env.php";

require PROJECT_DIR . '/vendor/yiisoft/yii2/Yii.php';
require PROJECT_DIR . "/config/bootstrap.php";

$config = \yii\helpers\ArrayHelper::merge(
    require PROJECT_DIR . "/config/base.php",
    require PROJECT_DIR . "/config/app.php"
);

(new yii\web\Application($config))->run();