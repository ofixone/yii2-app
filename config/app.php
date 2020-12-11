<?php

$config = [
    'defaultRoute' => 'app/index',
    'controllerNamespace' => 'app\backend\controllers',
    'viewPath' => PROJECT_DIR . '/frontend/views',
    'components' => [
        'request' => [
            'cookieValidationKey' => '_v3xFO_kgrKMGm7lhFZaLBejxlwY8Gou',
        ],
        'assetManager' => [
            'appendTimestamp' => true
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            
            ],
        ],
    ]
];

return getenv('YII_ENV') === 'dev' ? \yii\helpers\ArrayHelper::merge($config, [
    'bootstrap' => ['debug', 'gii'],
    'modules' => [
        'debug' => [
            'class' => \yii\debug\Module::class
        ],
        'gii' => [
            'class' => \yii\gii\Module::class
        ],
    ]
]) : $config;