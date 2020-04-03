<?php

use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Главная страница | KSIOR';
$imgPath = Yii::$app->params['staticDomain'] . '/';
setlocale(LC_ALL,'ru_RU.utf8');
?>
<section id="slider">
    <div class="row">
        <div class="col col-md-7 slider__carousel-wrapper">
            <section id="carousel">
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item">
                            <div class="jumbotron pulse animated hero-nature carousel-hero">
                                <h1 class="hero-title">Добро пожаловать!</h1>
                                <p class="hero-subtitle">
                                    В научно-практическая и академическая жизнь «Казахстанского общества интервенционных онкорадиологов»
                                </p>
                                <p><a class="btn btn-primary hero-button plat" role="button" href="<?= Url::to(['community/about']) ?>">Мне интересно</a></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="jumbotron pulse animated hero-photography carousel-hero">
                                <h1 class="hero-title">Добро пожаловать!</h1>
                                <p class="hero-subtitle">
                                    В научно-практическая и академическая жизнь «Казахстанского общества интервенционных онкорадиологов»
                                </p>
                                <p><a class="btn btn-primary hero-button plat" role="button" href="<?= Url::to(['community/about']) ?>">Подробнее</a></p>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="jumbotron pulse animated hero-technology carousel-hero">
                                <h1 class="hero-title">Добро пожаловать!</h1>
                                <p class="hero-subtitle">
                                    В научно-практическая и академическая жизнь «Казахстанского общества интервенционных онкорадиологов»
                                </p>
                                <p><a class="btn btn-primary hero-button plat" role="button" href="<?= Url::to(['community/about']) ?>">Подробнее</a></p>
                            </div>
                        </div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
                    <ol
                            class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
                    </ol>
                </div>
            </section>
        </div>
        <div class="col col-md-5 slider__description-wrapper">
            <div class="slider__description">
                <h2 class="slider__header">
                    Будьте с нами!
                </h2>
                <p class="slider__text">
                    Дорогие коллеги, а также все, кому не безразлична научно-практическая и академическая жизнь «Казахстанского общества интервенционных онкорадиологов» приглашаем вас к активному сотрудничеству. Вступайте в общество!
                    <br>
                </p>
                <div class="slider__button-wrapper"><a class="slider__button" href="#">Вы в обществе</a></div>
            </div>
        </div>
    </div>
</section>
<div class="projects-horizontal">
    <div class="container">
        <div class="row posts">
            <div class="col-sm-6 item">
                <div class="posts__item-title"><span>Самое свежее</span></div>
                <div class="row">
                    <div class="col">
                        <section>
                            <div class="photo-card">
                                <div class="photo-background" style="background-image:url(<?= $imgPath . 'posts/' . $latestNews->image ?>);"></div>
                                <div class="photo-details">
                                    <div class="photo-heading">
                                        <div>
                                            <span><?= strftime("%a %d %B %Y", $latestNews->created_at) ?></span>
                                        </div>
                                        <div>
                                            <span><i class="fa fa-eye"></i>&nbsp;<?= $latestNews->views ?></span>
                                        </div>
                                    </div>
                                    <p class="photo-text"><?= $latestNews->title ?><br></p>
                                    <div class="photo-tags">
                                        <ul>
                                            <li><a href="<?= Url::to(['news/view', 'id' => $latestNews->id]) ?>">Читать</a></li>
                                            <li><a href="<?= Url::to(['news/index']) ?>">Все новости</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="posts__item-title"><span>Клинический случай</span></div>
                <div class="row">
                    <div class="col">
                        <section>
                            <div class="photo-card">
                                <div class="photo-background" style="background-image:url(<?= $imgPath . 'posts/' . $latestClinicCase->image ?>);"></div>
                                <div class="photo-details">
                                    <div class="photo-heading"><span class="photo-author"><i class="fa fa-bullhorn"></i>&nbsp;<?= $latestClinicCase->author ?><br></span></div>
                                    <p style="padding-top: 5px;"><?= $latestClinicCase->title ?><br></p>
                                    <div class="photo-tags">
                                        <ul>
                                            <li><a href="<?= Url::to(['science-and-practice/clinic-case', 'id' => $latestClinicCase->id]) ?>">Читать</a></li>
                                            <li><a href="<?= Url::to(['science-and-practice/clinic-cases']) ?>">Другие случаи</a></li>
                                        </ul>
                                    </div>
                                    <div class="photo-heading"></div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="posts__item-title"><span>Экспертные мнения</span></div>
                <div class="row">
                    <div class="col">
                        <section>
                            <div class="photo-card">
                                <div class="photo-background" style="background-image:url(<?= $imgPath . 'posts/' . $latestExpertOpinion->image ?>);"></div>
                                <div class="photo-details">
                                    <h1><strong><?= $latestExpertOpinion->topic ?></strong><br></h1>
                                    <p><?= $latestExpertOpinion->title ?><br></p>
                                    <div><span class="photo-author"><i class="fa fa-bullhorn"></i>&nbsp;<?= $latestClinicCase->author ?><br><br></span></div>
                                    <div class="photo-tags">
                                        <ul>
                                            <li><a href="<?= Url::to(['science-and-practice/expert-opinion', 'id' => $latestExpertOpinion->id]) ?>">Читать</a></li>
                                            <li><a href="<?= Url::to(['science-and-practice/expert-opinions']) ?>">Другие мнения</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 item">
                <div class="posts__item-title"><span>Литература и Журналы</span></div>
                <div class="row">
                    <div class="col">
                        <section>
                            <div class="photo-card">
                                <div class="photo-background" style="background-image:url(&quot;img/product-aeon-feature.jpg&quot;); width: 100%; border-radius: 10px;">
                                    <div class="magazine-download__link-wrapper">
                                        <div class="photo-tags">
                                            <ul>
                                                <li>
                                                    <a href="#">Скачать журнал</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 item">
                <div class="posts__item-title"><span>Полезные ссылки</span></div>
                <div class="row">
                    <div class="col">
                        <section>
                            <div class="photo-card">
                                <div class="photo-details" style="width: 100%">
                                    <h1></h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales elementum mi non hendrerit. Proin tempor facilisis felis nec ultrices.&nbsp;</p>
                                    <div class="photo-tags">
                                        <ul>
                                            <li><a href="#">Открыть</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="team-about__block">
    <div class="container">
        <div class="row team-about__row">
            <div class="col-md-6">
                <h2>Члены общества</h2>
                <div class="team__item-wrapper">
                    <div class="team__item"><img class="rounded-circle team__item-img" src="img/pp.jfif">
                        <div class="team__item-title"><span><br>Малаева Нияз Бейсенович<br><br></span></div>
                    </div>
                    <div class="team__item"><img class="rounded-circle team__item-img" src="img/pp.jfif">
                        <div class="team__item-title"><span><br>Малаева Нияз Бейсенович<br><br></span></div>
                    </div>
                    <div class="team__item"><img class="rounded-circle team__item-img" src="img/pp.jfif">
                        <div class="team__item-title"><span><br>Малаева Нияз Бейсенович<br><br></span></div>
                    </div>
                </div>
                <div><a class="about__button" href="<?= Url::to(['community/direction']) ?>">Другие участники</a></div>
            </div>
            <div class="col-md-6 about__column">
                <h2>Об обществе</h2>
                <div>
                    <p class="about__description">
                        Дорогие коллеги, а также все, кому не безразлична научно-практическая и академическая жизнь «Казахстанского общества интервенционных онкорадиологов» приглашаем вас к активному сотрудничеству. Вступайте в общество!
                        <br><br>
                    </p>
                </div>
                <div>
                    <a class="about__button" href="<?= Url::to(['site/about']) ?>">Узнать больше</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="partners">
    <div class="partners__list-wrapper">
        <h2 style="text-align: center; margin-bottom: 40px">
            Наши партнеры
        </h2>
        <div class="owl-carousel partners__list">
            <div class="partners__item item">
                <img src="/img/client11.png" alt="partners">
            </div>
            <div class="partners__item item">
                <img src="/img/client12.png" alt="partners">
            </div>
            <div class="partners__item item">
                <img src="/img/client13.png" alt="partners">
            </div>
            <div class="partners__item item">
                <img src="/img/client14.png" alt="partners">
            </div>
            <div class="partners__item item">
                <img src="/img/client15.png" alt="partners">
            </div>
            <div class="partners__item item">
                <img src="/img/client16.jpg" alt="partners">
            </div>
            <div class="partners__item item">
                <img src="/img/client17.png" alt="partners">
            </div>
            <div class="partners__item item">
                <img src="/img/client18.png" alt="partners">
            </div>
            <div class="partners__item item">
                <img src="/img/client19.png" alt="partners">
            </div>
            <div class="partners__item item">
                <img src="/img/client20.png" alt="partners">
            </div>
        </div>
    </div>
</div>
<section class="locations">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Гоеграфия общества
                </h2>
                <ul>
                    <li>Астана</li>
                    <li>Алматы</li>
                    <li>Шымкент</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Подпишитесь</h2>
                <p>
                    на новости и события общества
                </p>
                <div class="locations-subscribe">
                    <form id="location-subscribe-form">
                        <div class="locations-subscribe__content">
                            <div class="locations-subscribe__text">
                                Оставайтесь на связи с нами и будьте в курсе всех последних событий Общества. Мы будем рады рассказать Вам обо всех интересных новостях!
                            </div>
                            <br>
                            <input class="form-control" type="email" maxlength="255" placeholder="Email" required>
                        </div>
                        <button type="submit" class="app-button">Подписаться</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

$js =<<<JS
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsiveClass:true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 4
            },
            1200: {
                items: 8
            }
        }
    });
});

$('#location-subscribe-form').on('submit', function(e) {
    e.preventDefault();
    Swal.fire(
      'Успех',
      'Вы успешно подписаны!',
      'success'
    );
    return false;
});
JS;

$this->registerJs($js);
?>