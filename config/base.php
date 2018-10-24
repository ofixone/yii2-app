<?php
$monolog = new \Monolog\Logger('app');
$monolog->pushHandler(new \Monolog\Handler\StreamHandler(
    PROJECT_DIR . "/runtime/logs/app_" . date('Y-m-d') . '.log'
));

$config = [
    'id' => 'app',
    'basePath' => PROJECT_DIR . "/backend",
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
                    'class' => \samdark\log\PsrTarget::class,
                    'logger' => $monolog,
                    'levels' => [
                        \yii\log\Logger::LEVEL_WARNING,
                        \yii\log\Logger::LEVEL_ERROR
                    ]
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
    'params' => require_once "params.php"
];

return env('YII_ENV_') === 'dev' ? \yii\helpers\ArrayHelper::merge($config, [
    'bootstrap' => ['gii'],
    'modules' => [
        'gii' => [
            'class' => \yii\gii\Module::class
        ]
    ]
]) : $config;