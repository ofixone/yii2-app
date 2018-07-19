<?php

/**
 * @var $this \yii\web\View
 * @var $content string
 */

use yii\helpers\Html;

\resources\assets\AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8"/>
    <meta name="format-detection" content="telephone=yes"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
    <title><?= Html::encode($this->title) ?></title>
</head>
<?= Html::beginTag('body', \yii\helpers\ArrayHelper::merge([], $this->params['bodyOptions'] ?? [])) ?>
<?php $this->beginBody() ?>
<?= Html::beginTag('main', \yii\helpers\ArrayHelper::merge([], $this->params['wrapperOptions'] ?? [])) ?>
<?= $content ?>
<?= Html::endTag('main') ?>
<?php $this->endBody() ?>
<?= Html::endTag('body') ?>
</html>
<?php $this->endPage() ?>
