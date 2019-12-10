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
                                <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                <p><a class="btn btn-primary hero-button plat" role="button" href="#">Мне интересно</a></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="jumbotron pulse animated hero-photography carousel-hero">
                                <h1 class="hero-title">Добро пожаловать!</h1>
                                <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                <p><a class="btn btn-primary hero-button plat" role="button" href="#">Подробнее</a></p>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="jumbotron pulse animated hero-technology carousel-hero">
                                <h1 class="hero-title">Добро пожаловать!</h1>
                                <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                <p><a class="btn btn-primary hero-button plat" role="button" href="#">Подробнее</a></p>
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
                <h2 class="slider__header">Будьте с нами!</h2>
                <p class="slider__text">Дорогие коллеги, приглашаем к активному сотрудничеству в рамках научно-практической жизни российского общества интервенционных кардиоангиологов. Нашей динамично развивающейся специальности нужны молодые амбициозные профессионалы! Будьте
                    с нами! Вступайте в общество РНОИК!<br></p>
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
                                <div class="photo-background" style="background-image:url(<?= $imgPath . 'web/posts/' . $latestNews->image ?>);"></div>
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
                            <div class="photo-card" style="background-color: rgb(0,35,42);">
                                <div class="photo-background" style="background-image:url(<?= $imgPath . 'web/posts/' . $latestClinicCase->image ?>);"></div>
                                <div class="photo-details">
                                    <div class="photo-heading"><span class="photo-author"><i class="fa fa-bullhorn"></i>&nbsp;<?= $latestClinicCase->author ?><br></span></div>
                                    <p style="padding-top: 5px;"><?= $latestClinicCase->title ?><br></p>
                                    <div class="photo-tags">
                                        <ul>
                                            <li><a href="<?= Url::to(['science-and-practice/clinic-case', 'id' => $latestClinicCase->id]) ?>" style="background-color: #009cbf;">Читать</a></li>
                                            <li><a href="<?= Url::to(['science-and-practice/clinic-cases']) ?>" style="background-color: #009cbf;">Другие случаи</a></li>
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
                            <div class="photo-card" style="background-color: #fff;">
                                <div class="photo-background" style="background-image:url(&quot;img/product-aeon-feature.jpg&quot;);"></div>
                                <div class="photo-details">
                                    <h1 style="color: rgb(0,0,0);"><strong><?= $latestExpertOpinion->topic ?></strong><br></h1>
                                    <p style="color: rgb(0,0,0);"><?= $latestExpertOpinion->title ?><br></p>
                                    <div><a href="#"><?= $latestExpertOpinion->author ?><br></a></div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="posts__item-title"><span>Журнал</span></div>
                <div class="row">
                    <div class="col">
                        <section>
                            <div class="photo-card">
                                <div class="photo-background" style="background-image:url(&quot;img/product-aeon-feature.jpg&quot;);">
                                    <div class="magazine-download__link-wrapper">
                                        <a href="#" class="magazine-download__link">
                                            <div class="magazine-download">
                                                Скачать журнал
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="photo-details">
                                    <h1>Lorem ipsum</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales elementum mi non hendrerit. Proin tempor facilisis felis nec ultrices.&nbsp;</p>
                                    <div class="photo-tags">
                                        <ul>
                                            <li><a href="#">Мед калькулятор</a></li>
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
                <h2>Члены общество</h2>
                <div class="team__item-wrapper">
                    <div class="team__item"><img class="rounded-circle team__item-img" src="img/1.jpg">
                        <div class="team__item-title"><span><br>Бабунашвили Автандил Михайлович<br><br></span></div>
                    </div>
                    <div class="team__item"><img class="rounded-circle team__item-img" src="img/1.jpg">
                        <div class="team__item-title"><span><br>Бабунашвили Автандил Михайлович<br><br></span></div>
                    </div>
                    <div class="team__item"><img class="rounded-circle team__item-img" src="img/1.jpg">
                        <div class="team__item-title"><span><br>Бабунашвили Автандил Михайлович<br><br></span></div>
                    </div>
                </div>
                <div><a class="about__button" href="<?= Url::to(['community/direction']) ?>">Другие участники</a></div>
            </div>
            <div class="col-md-6 about__column">
                <h2>Об обществе</h2>
                <div>
                    <p class="about__description">
                        «Российское научное общество интервенционных кардиоангиологов» (РНОИК) — это общероссийская общественная организация, объединяющая с 2000 года врачей кардиологов, рентгенологов, сердечно-сосудистых хирургов и специалистов по рентгенэндоваскулярной
                        диагностике и лечению с самой широкой географией от Калининграда до Камчатки.<br><br>
                    </p>
                </div>
                <div><a class="about__button" href="<?= Url::to(['site/about']) ?>">Узнать больше</a></div>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="row">
        <div class="col">
            <section>
                <div class="container">
                    <h1 class="text-center blog__title">Самое обсуждаемое</h1>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4 box-shadow"><img class="card-img-top w-100 d-block" src="img/minibus.jpeg">
                                <div class="card-body">
                                    <div class="card-info">
                                        <div><i class="fa fa-calendar"></i><span class="card-comments-count">13.07.2017</span></div>
                                        <div><i class="fa fa-commenting"></i><span class="card-comments-count">366</span></div>
                                    </div>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur explicabo odio! Adipisci aut dolores expedita maxime natus neque sed veritatis? Ea laborum neque nihil nobis omnis reiciendis ut voluptates.
                                    </p><a class="card-link" href="#"><button class="btn btn-info" type="button">Читать</button></a></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-4 box-shadow"><img class="card-img-top w-100 d-block" src="img/minibus.jpeg">
                                <div class="card-body">
                                    <div class="card-info">
                                        <div><i class="fa fa-calendar"></i><span class="card-comments-count">13.07.2017</span></div>
                                        <div><i class="fa fa-commenting"></i><span class="card-comments-count">366</span></div>
                                    </div>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad atque aut cupiditate deleniti earum, ex, exercitationem facilis inventore iusto magnam minus nobis odio officia optio quis sequi vel veniam!
                                    </p><a class="card-link" href="#"><button class="btn btn-info" type="button">Читать</button></a></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-4 box-shadow"><img class="card-img-top w-100 d-block" src="img/minibus.jpeg">
                                <div class="card-body">
                                    <div class="card-info">
                                        <div><i class="fa fa-calendar"></i><span class="card-comments-count">13.07.2017</span></div>
                                        <div><i class="fa fa-commenting"></i><span class="card-comments-count">366</span></div>
                                    </div>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci commodi delectus eius eligendi eos eveniet fugit, illo iusto molestiae mollitia nemo odio odit qui quia quis, totam vel? Consequuntur, harum.
                                    </p><a class="card-link" href="#"><button class="btn btn-info" type="button">Читать</button></a></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-4 box-shadow"><img class="card-img-top w-100 d-block" src="img/minibus.jpeg">
                                <div class="card-body">
                                    <div class="card-info">
                                        <div><i class="fa fa-calendar"></i><span class="card-comments-count">13.07.2017</span></div>
                                        <div><i class="fa fa-commenting"></i><span class="card-comments-count">366</span></div>
                                    </div>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nostrum, temporibus! A ad cupiditate explicabo, impedit minima molestiae, molestias nam necessitatibus qui quo sed tempore totam unde ut velit veniam!
                                    </p><a class="card-link" href="#"><button class="btn btn-info" type="button">Читать</button></a></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-4 box-shadow"><img class="card-img-top w-100 d-block" src="img/minibus.jpeg">
                                <div class="card-body">
                                    <div class="card-info">
                                        <div><i class="fa fa-calendar"></i><span class="card-comments-count">13.07.2017</span></div>
                                        <div><i class="fa fa-commenting"></i><span class="card-comments-count">366</span></div>
                                    </div>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias consequatur debitis dicta eligendi facilis harum in iure possimus, tempore. Incidunt laudantium molestias natus nihil nobis quisquam tempore tenetur ut.
                                    </p><a class="card-link" href="#"><button class="btn btn-info" type="button">Читать</button></a></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-4 box-shadow"><img class="card-img-top w-100 d-block" src="img/minibus.jpeg">
                                <div class="card-body">
                                    <div class="card-info">
                                        <div>
                                            <i class="fa fa-calendar"></i><span class="card-comments-count">13.07.2017</span>
                                        </div>
                                        <div>
                                            <i class="fa fa-commenting"></i><span class="card-comments-count">366</span>
                                        </div>
                                    </div>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis consequuntur iusto natus numquam rem sint, tenetur unde! At beatae consequatur eligendi laboriosam magni mollitia optio ut. Id, neque suscipit.
                                    </p><a class="card-link" href="#"><button class="btn btn-info" type="button">Читать</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
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
JS;

$this->registerJs($js);
?>