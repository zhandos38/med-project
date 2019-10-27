<?php
/* @var \common\models\Document $model */
$imgPath = Yii::$app->params['staticDomain'] . '/web/documents/';
?>
<div class="document__item-wrapper">
    <a class="document__item-link" href="<?= $imgPath . $model->document ?>" download>
        <div class="document__item">
            <div class="document__icon-wrapper">
                <i class="document__icon fa fa-file"></i>
            </div>
            <div class="document__title">
                <?= $model->name ?>
            </div>
            <div class="document__info">
                <?= $model->type ?>, <?= $model->size ?> МБ
            </div>
        </div>
    </a>
</div>