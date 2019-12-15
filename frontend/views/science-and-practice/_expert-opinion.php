<?php
/* @var \common\models\Post $model */
$filePath = Yii::$app->params['staticDomain'] . '/posts/';
?>
<a class="expert-opinion__link" href="<?= \yii\helpers\Url::to(['science-and-practice/expert-opinion', 'id' => $model->id])?>">
    <div class="expert-opinion__box">
        <div class="expert-opinion__image-wrapper">
            <img class="expert-opinion__image" src="<?= $filePath . $model->image ?>" width="100%">
        </div>
        <div class="expert-opinion__content">
            <div class="expert-opinion__topic">
                <?= $model->topic ?>
            </div>
            <div class="expert-opinion__full_name">
                <?= $model->title ?>
            </div>
        </div>
    </div>
</a>