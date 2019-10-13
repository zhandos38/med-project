<?php

/* @var $this yii\web\View */

$this->title = 'Index';
?>
<section id="slider">
    <div class="row">
        <div class="col col-md-7 slider__carousel-wrapper">
            <section id="carousel">
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item">
                            <div class="jumbotron pulse animated hero-nature carousel-hero">
                                <h1 class="hero-title">Hero Nature</h1>
                                <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="jumbotron pulse animated hero-photography carousel-hero">
                                <h1 class="hero-title">Hero Photography</h1>
                                <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="jumbotron pulse animated hero-technology carousel-hero">
                                <h1 class="hero-title">Hero Technology</h1>
                                <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                <p><a class="btn btn-primary hero-button plat" role="button" href="#">Мне интересно</a></p>
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
                <h2 class="slider__header">Будте с нами!</h2>
                <p class="slider__text">Дорогие коллеги, приглашаем к активному сотрудничеству в рамках научно-практической жизни российского общества интервенционных кардиоангиологов. Нашей динамично развивающейся специальности нужны молодые амбициозные профессионалы! Будьте
                    с нами! Вступайте в общество РНОИК!<br></p>
                <div class="slider__button-wrapper"><a class="slider__button" href="#">Вы в обществе</a></div>
            </div>
        </div>
    </div>
</section>
<div class="projects-horizontal">
    <div class="container">
        <div class="row projects">
            <div class="col-sm-6 item">
                <div class="posts__item-title"><span>Самое свежее</span></div>
                <div class="row">
                    <div class="col">
                        <section>
                            <div class="photo-card">
                                <div class="photo-background" style="background-image:url(&quot;img/product-aeon-feature.jpg&quot;);"></div>
                                <div class="photo-details">
                                    <div class="photo-heading">
                                        <div><span>26 сентября 2019</span></div>
                                        <div><span><i class="fa fa-eye"></i>&nbsp;116</span></div>
                                    </div>
                                    <p class="photo-text">Отличная новость! VI Международный курс «Современные тенденции в лечении острого инфаркта миокарда с подъемом сегмента ST – от теории к повседневной практике» аккредитован в системе НМО<br></p>
                                    <div class="photo-tags">
                                        <ul>
                                            <li><a href="#">Читать</a></li>
                                            <li><a href="#">Все новости</a></li>
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
                                <div class="photo-background" style="background-image:url(&quot;img/product-aeon-feature.jpg&quot;);"></div>
                                <div class="photo-details">
                                    <div class="photo-heading"><span class="photo-author"><i class="fa fa-bullhorn"></i>&nbsp;Иоселиани Давид Георгиевич<br></span></div>
                                    <p style="padding-top: 5px;">Окклюзия правой поверхностной и глубокой бедренных артерий после стентирования почечной артерии у пациента с мультифокальным атеросклерозом<br></p>
                                    <div class="photo-tags">
                                        <ul>
                                            <li><a href="#" style="background-color: #009cbf;">Читать</a></li>
                                            <li><a href="#" style="background-color: #009cbf;">Другие случаи</a></li>
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
                                    <h1 style="color: rgb(0,0,0);"><strong>Лечение артериовенозной мальформации</strong><br></h1>
                                    <p style="color: rgb(0,0,0);">Современный вектор эндоваскулярного лечения острого периода разрыва артериовенозной мальформации.<br></p>
                                    <div><a href="#">Гегенава Б. Б.<br></a></div>
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
                                <div class="photo-background" style="background-image:url(&quot;img/product-aeon-feature.jpg&quot;);"></div>
                                <div class="photo-details">
                                    <h1>Lorem ipsum</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales elementum mi non hendrerit. Proin tempor facilisis felis nec ultrices.&nbsp;</p>
                                    <div class="photo-tags">
                                        <ul>
                                            <li><a href="#">Скачать журнал</a></li>
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
                <div><a class="about__button" href="#">Другие участники</a></div>
            </div>
            <div class="col-md-6 about__column">
                <h2>Об обществе</h2>
                <div>
                    <p class="about__description">«Российское научное общество интервенционных кардиоангиологов» (РНОИК) — это общероссийская общественная организация, объединяющая с 2000 года врачей кардиологов, рентгенологов, сердечно-сосудистых хирургов и специалистов по рентгенэндоваскулярной
                        диагностике и лечению с самой широкой географией от Калининграда до Камчатки.<br><br></p>
                </div>
                <div><a class="about__button" href="#">Узнать больше</a></div>
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
                            <div class="card mb-4 box-shadow rounded-0"><img class="card-img-top w-100 d-block rounded-0" src="img/minibus.jpeg">
                                <div class="card-body">
                                    <div class="card-info">
                                        <div><i class="fa fa-calendar"></i><span class="card-comments-count">13.07.2017</span></div>
                                        <div><i class="fa fa-commenting"></i><span class="card-comments-count">366</span></div>
                                    </div>
                                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget qu ghgjhghg glo.</p><a class="card-link" href="#"><button class="btn btn-info" type="button">Читать</button></a></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-4 box-shadow rounded-0"><img class="card-img-top w-100 d-block rounded-0" src="img/minibus.jpeg">
                                <div class="card-body">
                                    <div class="card-info">
                                        <div><i class="fa fa-calendar"></i><span class="card-comments-count">13.07.2017</span></div>
                                        <div><i class="fa fa-commenting"></i><span class="card-comments-count">366</span></div>
                                    </div>
                                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget qu ghgjhghg glo.</p><a class="card-link" href="#"><button class="btn btn-info" type="button">Читать</button></a></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-4 box-shadow rounded-0"><img class="card-img-top w-100 d-block rounded-0" src="img/minibus.jpeg">
                                <div class="card-body">
                                    <div class="card-info">
                                        <div><i class="fa fa-calendar"></i><span class="card-comments-count">13.07.2017</span></div>
                                        <div><i class="fa fa-commenting"></i><span class="card-comments-count">366</span></div>
                                    </div>
                                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget qu ghgjhghg glo.</p><a class="card-link" href="#"><button class="btn btn-info" type="button">Читать</button></a></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-4 box-shadow rounded-0"><img class="card-img-top w-100 d-block rounded-0" src="img/minibus.jpeg">
                                <div class="card-body">
                                    <div class="card-info">
                                        <div><i class="fa fa-calendar"></i><span class="card-comments-count">13.07.2017</span></div>
                                        <div><i class="fa fa-commenting"></i><span class="card-comments-count">366</span></div>
                                    </div>
                                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget qu ghgjhghg glo.</p><a class="card-link" href="#"><button class="btn btn-info" type="button">Читать</button></a></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-4 box-shadow rounded-0"><img class="card-img-top w-100 d-block rounded-0" src="img/minibus.jpeg">
                                <div class="card-body">
                                    <div class="card-info">
                                        <div><i class="fa fa-calendar"></i><span class="card-comments-count">13.07.2017</span></div>
                                        <div><i class="fa fa-commenting"></i><span class="card-comments-count">366</span></div>
                                    </div>
                                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget qu ghgjhghg glo.</p><a class="card-link" href="#"><button class="btn btn-info" type="button">Читать</button></a></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-4 box-shadow rounded-0"><img class="card-img-top w-100 d-block rounded-0" src="img/minibus.jpeg">
                                <div class="card-body">
                                    <div class="card-info">
                                        <div><i class="fa fa-calendar"></i><span class="card-comments-count">13.07.2017</span></div>
                                        <div><i class="fa fa-commenting"></i><span class="card-comments-count">366</span></div>
                                    </div>
                                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget qu ghgjhghg glo.</p><a class="card-link" href="#"><button class="btn btn-info" type="button">Читать</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<div class="projects-horizontal">
    <div class="container projects-horizontal__container">
        <div class="intro">
            <h2 class="text-center">Наших партнеров</h2>
            <p class="text-center">Благодарим за сотрудничество</p>
        </div>
        <div class="row projects">
            <div class="col">
                <section class="customer-logos slider">
                    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 slide"><img src="img/client11.png" width="100%"></div>
                    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 slide"><img src="img/client12.png" width="100%"></div>
                    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 slide"><img src="img/client13.png" width="100%"></div>
                    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 slide"><img src="img/client14.png" width="100%"></div>
                    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 slide"><img src="img/client15.png" width="100%"></div>
                    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 slide"><img src="img/client16.jpg" width="100%"></div>
                    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 slide"><img src="img/client17.png" width="100%"></div>
                    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 slide"><img src="img/client18.png" width="100%"></div>
                    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 slide"><img src="img/client19.png" width="100%"></div>
                    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 slide"><img src="img/client20.png" width="100%"></div>
                    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 slide"><img src="img/client21.png" width="100%"></div>
                    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 slide"><img src="img/client22.png" width="100%"></div>
                </section>
            </div>
        </div>
    </div>
</div>
