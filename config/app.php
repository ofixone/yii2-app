<?php

$config = [
    'id' => env('APP_ID'),
    'name' => env('APP_NAME'),
    'defaultRoute' => 'app/index',
    'viewPath' => PROJECT_DIR . "/resources/views",
    'components' => [
        'request' => [
            'cookieValidationKey' => 'NWkH-q3J_pPtCTTCc1Kijz-3TF1ACBCi',
        ],
    ]
];

return YII_ENV_DEV ? \yii\helpers\ArrayHelper::merge($config, [
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