<?php
use yii\helpers\Url;
?>
<div>
    <header class="header">
        <div class="row">
            <div class="col header-column">
                <div class="container header-container">
                    <div class="header-search"><input class="d-xl-flex navbar-search__input form-control" type="search" placeholder="Пойск по сайту"><i class="fa fa-search header__search-icon"></i></div>
                    <div class="header-buttons"><div class="header-enter-btn">Вступить в общество</div><div class="header-login-btn"><i class="header-sign-in-icon fa fa-sign-in"></i>Войти</div></div>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="/"><img class="navbar-brand_img" loading="lazy" src="/img/logo.png"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse navbar-column" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Общество</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['site/about']) ?>">Об обществе</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['site/statute']) ?>">Устав</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['site/history']) ?>">История</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['site/documents']) ?>">Документы</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['community/direction']) ?>">Правление</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['community/index']) ?>">Члены общества</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['community/geography']) ?>">География общество</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['/news']) ?>">Новости</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['site/under-construction']) ?>">Медицинские партнеры</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['site/under-construction']) ?>">Ветеранский совет</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Мероприятия</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['events/future']) ?>">Предстоящие мероприятия</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['events/last']) ?>">Прошедшые мероприятия</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Наука и практика</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['science-and-practice/tutorials']) ?>">Учебные пособия</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['science-and-practice/recommendations']) ?>">Рекомендации</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['science-and-practice/publications']) ?>">Публикации</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['science-and-practice/clinic-cases']) ?>">Клинические случай</a>
                            <a class="dropdown-item" role="presentation" href="#">Презентации</a>
                            <a class="dropdown-item" role="presentation" href="#">Видеотрансляции и архив</a>
                            <a class="dropdown-item" role="presentation" href="#">Экпертные мнения</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Правовая информация</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="#">Радиацианные безопасность</a>
                            <a class="dropdown-item" role="presentation" href="#">Образование по специальности</a>
                            <a class="dropdown-item" role="presentation" href="#">Нормативные документы</a>
                            <a class="dropdown-item" role="presentation" href="#">Консультация юриста</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Специалистам</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="#">Вакансии</a>
                        </div>
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