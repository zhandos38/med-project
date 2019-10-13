<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\IndexAsset;
use common\widgets\Alert;

IndexAsset::register($this);
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

<div>
    <header class="header">
        <div class="row">
            <div class="col header-column">
                <div class="container header-container">
                    <div class="header-search"><input class="d-xl-flex navbar-search__input form-control" type="search" placeholder="Пойск по сайту"><i class="fa fa-search header__search-icon"></i></div>
                    <div class="header-buttons"><button class="btn btn-light" type="button">Вступить в общество</button><button class="btn btn-light header-login-btn" type="button">Войти</button></div>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="#"><img class="navbar-brand_img" loading="lazy" src="img/logo.png"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                    class="collapse navbar-collapse navbar-column" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Общество</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="#">Об обществе</a>
                            <a class="dropdown-item" role="presentation" href="#">Устав</a>
                            <a class="dropdown-item" role="presentation" href="#">История</a>
                            <a class="dropdown-item" role="presentation" href="#">Документы</a>
                            <a class="dropdown-item" role="presentation" href="#">Правление</a>
                            <a class="dropdown-item" role="presentation" href="#">Члены общества</a>
                            <a class="dropdown-item" role="presentation" href="#">География общество</a>
                            <a class="dropdown-item" role="presentation" href="#">Новости</a>
                            <a class="dropdown-item" role="presentation" href="#">Медицинские партнеры</a>
                            <a class="dropdown-item" role="presentation" href="#">Ветеранский совет</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Мероприятия</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="#">First Item</a>
                            <a class="dropdown-item" role="presentation" href="#">Second Item</a>
                            <a class="dropdown-item" role="presentation" href="#">Third Item</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Наука и практика</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Правовая информация</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Специалистам</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Пациентам</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Контакты</a></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>


<div class="footer-clean">
    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Legacy</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>Careers</h3>
                    <ul>
                        <li><a href="#">Job openings</a></li>
                        <li><a href="#">Employee success</a></li>
                        <li><a href="#">Benefits</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                    <p class="copyright">Company Name © 2017</p>
                </div>
            </div>
        </div>
    </footer>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
