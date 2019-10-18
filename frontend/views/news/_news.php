<?php
$imgPath = Yii::$app->params['staticDomain'];
?>
<a class="news__item-wrapper" href="<?= \yii\helpers\Url::to(['news/view', 'id' => $model->id]) ?>">
    <div class="news__item">
        <div class="row">
            <div class="col-md-4 news__img-wrapper"><img class="img-fluid" src="<?= $imgPath . '/web/posts/' . $model->image ?>"></div>
            <div class="col-md-8">
                <div class="news__content">
                    <div class="news__heading">
                        <div class="news__date"><span><i class="fa fa-calendar news__date-icon"></i><?= date('d/m/Y', $model->created_at) ?><br></span></div>
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