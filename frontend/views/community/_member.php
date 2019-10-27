<?php
/* @var \common\models\Member $model */
$imgPath = Yii::$app->params['staticDomain'] . 'web/members/';
?>
<a class="member__link" href="<?= \yii\helpers\Url::to(['community/member', 'id' => $model->id]) ?>">
    <div class="member__box">
        <div class="member__image-wrapper">
            <img class="member__image" src="<?= $imgPath . $model->image ?>" width="100%">
        </div>
        <div class="member__content">
            <div class="member__full_name">
                <?= $model->full_name ?>
            </div>
            <div class="member__description">
                <?= $model->short_description ?>
            </div>
            <div class="member__email">
                <i class="member__envelope-icon fa fa-envelope"></i><?= $model->email ?>
            </div>
        </div>
    </div>
</a>