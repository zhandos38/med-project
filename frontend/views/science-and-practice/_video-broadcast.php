<?php
/* @var \common\models\Post $model */
$filePath = Yii::$app->params['staticDomain'] . 'web/posts/';
?>
<a class="video-broadcast__link" href="<?= \yii\helpers\Url::to(['science-and-practice/video-broadcast', 'id' => $model->id])?>">
    <div class="video-broadcast__box">
        <div class="video-broadcast__content">
            <div class="video-broadcast__full_name">
                <?= $model->title ?>
            </div>
            <div class="video-broadcast__description">
                <?= $model->content ?>
            </div>
        </div>
    </div>
</a>