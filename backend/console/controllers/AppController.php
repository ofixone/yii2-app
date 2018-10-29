<?php

namespace app\backend\console\controllers;

use Yii;
use yii\console\Controller;
use yii\console\ExitCode;
use yii\helpers\Console;

class AppController extends Controller
{
    public function actionIndex()
    {
        Console::output(Yii::$app->controller->id . "/" . Yii::$app->controller->action->id);
        return ExitCode::OK;
    }
}