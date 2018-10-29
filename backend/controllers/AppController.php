<?php

namespace app\backend\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public $layout = 'main.twig';

    public function actionIndex()
    {
        return $this->render('index.twig');
    }
}