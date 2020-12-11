<?php

namespace app\backend\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index.php');
    }
}