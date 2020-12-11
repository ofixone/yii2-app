<?php
/**
 * @var \yii\web\View $this
 * @var string $content
 */

use yii\helpers\Html;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="format-detection" content="telephone=yes"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
    <title><?= Html::encode($this->title) ?></title>
</head>
<?= Html::beginTag('body', \yii\helpers\ArrayHelper::merge([], $this->params['bodyOptions'] ?? [])) ?>
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>
<?= Html::endTag('body') ?>
</html>
<?php $this->endPage() ?>
