<?php
$config = [
    'id' => 'app',
    'basePath' => PROJECT_DIR,
    'vendorPath' => PROJECT_DIR . '/vendor',
    'runtimePath' => PROJECT_DIR . '/runtime',
    'language' => 'ru',
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'components' => [
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0
        ],
        'cache' => [
            'class' => \yii\caching\FileCache::class
        ],
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'pgsql:host='.env('DB_HOST', 'localhost').';dbname='. env('DB_NAME', 'app'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'enableSchemaCache' => env('YII_ENV') === 'prod',
            'charset' => 'utf8'
        ],
    ],
    'params' => require_once 'params.php'
];

return env('YII_ENV_') === 'dev' ? \yii\helpers\ArrayHelper::merge($config, [
    'bootstrap' => ['gii'],
    'modules' => [
        'gii' => [
            'class' => \yii\gii\Module::class
        ]
    ]
]) : $config;