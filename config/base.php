<?php

$params = require_once __DIR__ . "/params.php";

$config = [
    'basePath' => PROJECT_DIR . "/app",
    'vendorPath' => PROJECT_DIR . "/vendor",
    'runtimePath' => PROJECT_DIR . "/runtime",
    'language' => 'ru',
    'bootstrap' => ['monolog', 'log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'components' => [
        'monolog' => [
            'class' => \Mero\Monolog\MonologComponent::class,
            'channels' => [
                'main' => [
                    'handler' => [
                        [
                            'type' => 'stream',
                            'path' => '@runtime/logs/yii_' . date('Y-m-d') . '.log'
                        ]
                    ],
                    'processor' => [],
                ],
            ]
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \Mero\Monolog\MonologTarget::class,
                    'levels' => ['error', 'warning', 'info'],
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