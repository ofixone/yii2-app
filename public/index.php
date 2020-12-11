<?php
defined('PROJECT_DIR') or define('PROJECT_DIR', dirname(__DIR__));

require PROJECT_DIR . '/vendor/autoload.php';

if (getenv('APP_ENV') === 'dev') {
    Yiisoft\Composer\Config\Builder::rebuild();
}

require PROJECT_DIR . '/vendor/yiisoft/yii2/Yii.php';
require PROJECT_DIR . '/config/primary/bootstrap.php';

(new yii\web\Application(require_once PROJECT_DIR . '/runtime/config/app.php'))->run();