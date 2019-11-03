<?php
$imgPath = Yii::$app->params['staticDomain'];
?>
<a class="clinic-case__item-wrapper" href="<?= \yii\helpers\Url::to(['clinic-case/view', 'id' => $model->id]) ?>">
    <div class="clinic-case__item">
        <div class="clinic-case__content">
            <div class="clinic-case__heading">
                <div class="clinic-case__date"><span><i class="fa fa-calendar news__date-icon"></i>26 Сентября 2019<br></span></div>
            </div>
            <div class="clinic-case__text">
                <p><?= $model->title ?></p>
            </div>
            <div><span><a href="https://rnoik.ru/community/members-of-society/ioseliani-david-georgievich/">Иоселиани Давид Георгиевич</a><br></span></div>
        </div>
    </div>
</a>