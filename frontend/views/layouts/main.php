<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $this->render('_navbar')  ?>

<div class="breadcrumb__wrapper">
    <div class="container">
        <div class="text-left" style="font-size: 17px;">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row" style="padding-top: 20px">
        <div class="col-md-8">

<?= Alert::widget() ?>
<?= $content ?>

        </div>

        <div class="col col-lg-4">
            <div class="aside-event">
                <h2 class="aside-event__header">Мероприятия<br></h2>
                <div class="aside-event__item-wrapper">
                    <a class="aside-event__item" href="#">
                        <div class="aside-event__item-box">
                            <div class="aside-event__date"><span>03 — 04 Октября 2019<br></span></div>
                            <p class="aside-event__text">Вебинар "Эндоваскулярное лечение сложных хронических окклюзий коронарных артерий. Мастер-класс с прямой трансляцией из операционной"<br></p>
                        </div>
                    </a>
                </div>
                <div class="aside-event__item-wrapper">
                    <a class="aside-event__item" href="#">
                        <div class="aside-event__item-box">
                            <div class="aside-event__date"><span>03 — 04 Октября 2019<br></span></div>
                            <p class="aside-event__text">Вебинар "Эндоваскулярное лечение сложных хронических окклюзий коронарных артерий. Мастер-класс с прямой трансляцией из операционной"<br></p>
                        </div>
                    </a>
                </div>
                <div class="aside-event"></div>
            </div>
            <div class="aside-expert-opinion">
                <h2 class="aside-expert-opinion__header"><strong>Экспертные мнения</strong><br></h2>
                <div class="aside-expert-opinion__item"><a class="aside-expert-opinion__link-wrapper" href="#"></a>
                    <div class="aside-expert-opinion__box">
                        <div><span>Лечение артериовенозной мальформации<br></span></div>
                        <div class="aside-expert-opinion__title">
                            <p>Современный вектор эндоваскулярного лечения острого периода разрыва артериовенозной мальформации.<br></p>
                        </div>
                        <div><span>Гегенава Б. Б.<br></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->render('_footer') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
