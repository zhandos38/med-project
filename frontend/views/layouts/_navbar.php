<?php
use yii\helpers\Url;
?>
<div>
    <header class="header">
        <div class="row">
            <div class="col header-column">
                <div class="container header-container">
                    <div class="header-search"><input class="d-xl-flex navbar-search__input form-control" type="search" placeholder="Пойск по сайту"><i class="fa fa-search header__search-icon"></i></div>
                    <div class="header-buttons">
                        <?php if (Yii::$app->user->isGuest): ?>
                            <a class="header-enter-btn" href="<?= Url::to(['site/signup']) ?>">
                                Вступить в общество
                            </a>
                            <a class="header-login-btn" href="<?= Url::to(['site/login']) ?>">
                                <i class="header-sign-in-icon fa fa-sign-in"></i>Войти
                            </a>
                        <?php else: ?>
                            <div class="header-username">
                                <i class="header-user-icon fa fa-user"></i> <?= Yii::$app->user->identity->username ?>
                            </div>
                            <a class="header-logout-btn" href="<?= Url::to(['site/logout']) ?>">
                                Выйти
                            </a>
                        <?php endif; ?>
                    </div>
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
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['community/about']) ?>">Об обществе</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['community/statute']) ?>">Устав</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['community/history']) ?>">История</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['community/documents']) ?>">Документы</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['community/direction']) ?>">Правление</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['community/index']) ?>">Члены общества</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['community/geography']) ?>">География общество</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['news/']) ?>">Новости</a>
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
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['science-and-practice/presentations']) ?>">Презентации</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['science-and-practice/video-broadcasts']) ?>">Видеотрансляции и архив</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['science-and-practice/expert-opinions']) ?>">Экпертные мнения</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Правовая информация</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['site/radiation-safety']) ?>">Радиацианные безопасность</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['site/profile-education']) ?>">Образование по специальности</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['site/normative-documents']) ?>">Нормативные документы</a>
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['site/consulting']) ?>">Консультация юриста</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Специалистам</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="<?= Url::to(['site/vacations']) ?>">Вакансии</a>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= Url::to(['site/for-patients']) ?>">Пациентам</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= Url::to(['site/contacts']) ?>">Контакты</a></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
            </div>
        </div>
    </nav>
</div>