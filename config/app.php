<?php

$config = [
    'id' => env('APP_ID'),
    'name' => env('APP_NAME'),
    'defaultRoute' => 'app/index',
    'viewPath' => PROJECT_DIR . "/resources/views",
    'components' => [
        'request' => [
            'cookieValidationKey' => 'hzoXlx0uqb5qDrB4ol03H7EFLVPjyexs',
        ],
        'view' => [
            'class' => \yii\web\View::class,
            'renderers' => [
                'twig' => [
                    'class' => \yii\twig\ViewRenderer::class,
                    'cachePath' => '@runtime/Twig/cache',
                    'options' => [
                        'auto_reload' => true
                    ],
                    'globals' => [
                        'html' => [
                            'class' => \yii\helpers\Html::class
                        ],
                        'url' => [
                            'class' => \yii\helpers\Url::class
                        ],
                    ]
                ]
            ]
        ]
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