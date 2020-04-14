<?php

/* @var \common\models\Presentation $model */
$imgPath = Yii::$app->params['staticDomain'] . '/presentations/';
?>
<a href="<?= $imgPath . $model->file ?>" class="publication__link" download>
    <div class="presentation__box">
        <div class="presentation__name">
            <?= $model->name ?>
        </div>
        <div class="presentation__author">
            Автор: <?= $model->author ?>
        </div>
        <?php if (!empty($model->year)): ?>
        <div class="presentation__footer">
            <div class="presentation__year">
                <i class="presentation__year-icon fa fa-calendar"></i> <?= $model->year ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</a>