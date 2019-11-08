<?php

/* @var \common\models\Post $model */
?>
<a href="<?= \yii\helpers\Url::to(['science-and-practice/publication', 'id' => $model->id]) ?>" class="publication__link">
    <div class="publication__box">
        <div class="publication__date">
            <?= strftime("%a %d %B %Y", $model->created_at)  ?>
        </div>
        <div class="publication__name">
            <?= $model->title ?>
        </div>
        <div class="publication__short-description">
            <?= mb_strimwidth($model->content,0,385,'...') ?>
        </div>
    </div>
</a>
