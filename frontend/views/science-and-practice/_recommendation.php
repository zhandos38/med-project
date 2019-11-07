<?php

/* @var \common\models\Post $model */
?>
<a href="<?= \yii\helpers\Url::to(['science-and-practice/view-recommendation', 'id' => $model->id]) ?>" class="recommendation__link">
    <div class="recommendation__box">
        <div class="recommendation__date">
            <?= strftime("%a %d %B %Y", $model->created_at)  ?>
        </div>
        <div class="recommendation__name">
            <?= $model->title ?>
        </div>
        <div class="recommendation__short-description">
            <?= mb_strimwidth($model->content,0,385,'...') ?>
        </div>
    </div>
</a>
