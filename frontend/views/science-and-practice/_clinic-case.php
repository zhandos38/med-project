<?php

/* @var \common\models\Post $model */

setlocale(LC_ALL,'ru_RU.utf8');
?>
<a href="<?= \yii\helpers\Url::to(['science-and-practice/clinic-case', 'id' => $model->id]) ?>" class="clinic-case__link">
    <div class="clinic-case__box">
        <div class="clinic-case__date">
            <?= strftime("%a %d %B %Y", $model->created_at)  ?>
        </div>
        <div class="clinic-case__name">
            <?= $model->title ?>
        </div>
        <div class="clinic-case__author">
            Автор: <?= $model->author ? $model->author : 'Не указано' ?>
        </div>
    </div>
</a>
