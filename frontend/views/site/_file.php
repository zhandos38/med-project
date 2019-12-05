<?php
/* @var \common\models\Tutorial $model */
$filePath = Yii::$app->params['staticDomain'] . 'web/tutorials/';
?>
<a class="manual__link" href="<?= $filePath . $model->file ?>" download>
    <div class="manual__box">
        <div class="manual__image-wrapper">
            <img class="manual__image" src="<?= $filePath . $model->image ?>" width="100%">
        </div>
        <div class="manual__content">
            <div class="manual__full_name">
                <?= $model->name ?>
            </div>
            <div class="manual__description">
                <?= $model->description ?>
            </div>
        </div>
    </div>
</a>