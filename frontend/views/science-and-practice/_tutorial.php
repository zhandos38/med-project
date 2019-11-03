<?php
/* @var \common\models\Tutorial $model */
$filePath = Yii::$app->params['staticDomain'] . 'web/tutorials/';
?>
<a class="tutorial__link" href="<?= $filePath . $model->file ?>" download>
    <div class="tutorial__box">
        <div class="tutorial__image-wrapper">
            <img class="tutorial__image" src="<?= $filePath . $model->image ?>" width="100%">
        </div>
        <div class="tutorial__content">
            <div class="tutorial__full_name">
                <?= $model->name ?>
            </div>
            <div class="tutorial__description">
                <?= $model->description ?>
            </div>
        </div>
    </div>
</a>