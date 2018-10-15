<?php

$params = require_once __DIR__ . "/params.php";

$config = [
    'basePath' => PROJECT_DIR . "/app",
    'vendorPath' => PROJECT_DIR . "/vendor",
    'runtimePath' => PROJECT_DIR . "/runtime",
    'language' => 'ru',
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'components' => [
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error'],
                ],
            ],
        ],
        'cache' => [
            'class' => \yii\caching\FileCache::class
        ],
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'mysql:host='.env('DB_DSN', 'localhost').';dbname='. env('DB_NAME', 'app'),
            'username' => env('DB_USER', 'root'),
            'password' => env('DB_PASS', ''),
            'enableSchemaCache' => env('YII_ENV') === 'prod',
            'charset' => 'utf8'
        ],
    ],
    'params' => $params
];

return env('YII_ENV_') === 'dev' ? \yii\helpers\ArrayHelper::merge($config, [
    'bootstrap' => ['gii'],
    'modules' => [
        'gii' => [
            'class' => \yii\gii\Module::class
        ]
    ]
]) : $config;