<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\IndexAsset;
use common\widgets\Alert;

IndexAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $this->render('_navbar')  ?>

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

        <?php if (Yii::$app->session->hasFlash('success')): ?>
            <div class="flash-alert">
                <div class="flash-alert__exit-btn">
                    <i class="fa fa-close"></i>
                </div>
                <div class="flash-alert__container">
                    <?= Yii::$app->session->getFlash('success') ?>
                </div>
            </div>
<?php
$js =<<<JS
$('.flash-alert__exit-btn').click(function () {
    $('.flash-alert').css('display', 'none');
});
JS;

$this->registerJs($js);
?>
        <?php endif; ?>

        <?= $content ?>

<?= $this->render('_footer') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
