<?php
/**
 * @var array $params
 */


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
            'dsn' => 'pgsql:host='.getenv('DB_HOST').';dbname='. getenv('DB_NAME'),
            'username' => getenv('DB_USERNAME', 'root'),
            'password' => getenv('DB_PASSWORD', ''),
            'enableSchemaCache' => getenv('YII_ENV') === 'prod',
            'charset' => 'utf8'
        ],
    ],
    'params' => $params
];

return getenv('YII_ENV_') === 'dev' ? \yii\helpers\ArrayHelper::merge($config, [
    'bootstrap' => ['gii'],
    'modules' => [
        'gii' => [
            'class' => \yii\gii\Module::class
        ]
    ]
]) : $config;