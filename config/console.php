<?php

$config = [
    'controllerNamespace' => 'app\backend\console\controllers',
	'controllerMap' => [
        'migrate' => [
            'class' => \yii\console\controllers\MigrateController::class,
            'migrationPath' => '@backend/migrations'
        ]
    ]
];

return $config;