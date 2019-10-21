<?php
$imgPath = Yii::$app->params['staticDomain'];
?>
<a class="news__item-wrapper" href="<?= \yii\helpers\Url::to(['clinic-case/view', 'id' => $model->id]) ?>">
    <div class="news__item">
        <div class="row">
            <div class="col-md-4 news__img-wrapper"><img class="img-fluid" src="<?= $imgPath . '/web/posts/' . $model->image ?>"></div>
            <div class="col-md-8">
                <div class="news__content">
                    <div class="news__heading">
                        <div class="news__date"><span><i class="fa fa-calendar news__date-icon"></i><?= date('d/m/Y H:i', $model->created_at) ?><br></span></div>
                        <div class="news__views"><span><i class="fa fa-eye news__icon"></i><?= $model->views ? $model->views : 0 ?></span></div>
                    </div>
                    <div class="news__text">
                        <p><?= $model->title ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>

<div class="clinic-cases__item-wrapper">
<a class="clinic-cases__item-link" href="<?= \yii\helpers\Url::to(['clinic-case/view', 'id' => $model->id]) ?>">
    <div class="clinic-cases__item">
        <div class="row">
            <div class="col-md-12">
                <div class="clinic-cases__content">
                    <div class="clinic-cases__heading">
                        <div class="clinic-cases__date"><span><i class="fa fa-calendar news__date-icon"></i>26 Сентября 2019<br></span></div>
                    </div>
                    <div class="clinic-cases__text">
                        <p><?= $model->title ?></p>
                    </div>
                    <div><span><a href="https://rnoik.ru/community/members-of-society/ioseliani-david-georgievich/">Иоселиани Давид Георгиевич</a><br></span></div>
                </div>
            </div>
        </div>
    </div>
</a>
</div>