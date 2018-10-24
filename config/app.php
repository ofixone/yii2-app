<?php

$config = [
    'defaultRoute' => 'app/index',
    'viewPath' => PROJECT_DIR . "/frontend/views",
    'components' => [
        'request' => [
            'cookieValidationKey' => '_v3xFO_kgrKMGm7lhFZaLBejxlwY8Gou',
        ],
        'view' => [
            'renderers' => [
                'twig' => \yii\helpers\ArrayHelper::merge([
                    'class' => \yii\twig\ViewRenderer::class,
                    'cachePath' => '@runtime/twig/cache',
                    'options' => [
                        'auto_reload' => YII_ENV_DEV
                    ]
                ], require "additional/twig.php")
            ]
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

return env('YII_ENV') === 'dev' ? \yii\helpers\ArrayHelper::merge($config, [
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