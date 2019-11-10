<?php

/* @var \yii\web\View $this */
$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<h2 class="contacts__title"><strong>Контакты</strong><br></h2>
<div class="contacts__item-wrapper">
    <div class="contacts__item" src="assets/img/1.jpg"><img class="rounded-circle team__item-img" src="/img/1.jpg">
        <div class="contacts__item-title"><span>Бабунашвили А.М.<br></span></div>
        <div><span>Председатель РНОИК</span></div>
        <div class="contacts__email"><i class="fa fa-envelope-o contacts__email-icon"></i><a href="#">example@gmail.com</a></div>
    </div>
    <div class="contacts__item" src="assets/img/1.jpg"><img class="rounded-circle team__item-img" src="/img/1.jpg">
        <div class="contacts__item-title"><span>Бабунашвили А.М.<br></span></div>
        <div><span>Председатель РНОИК</span></div>
        <div class="contacts__email"><i class="fa fa-envelope-o contacts__email-icon"></i><a href="#">example@gmail.com</a></div>
    </div>
    <div class="contacts__item" src="assets/img/1.jpg"><img class="rounded-circle team__item-img" src="/img/1.jpg">
        <div class="contacts__item-title"><span>Бабунашвили А.М.<br></span></div>
        <div><span>Председатель РНОИК</span></div>
        <div class="contacts__email"><i class="fa fa-envelope-o contacts__email-icon"></i><a href="#">example@gmail.com</a></div>
    </div>
</div>
<div class="row">
    <div class="col contacts__form">
        <div class="col-md-8">
            <form>
                <div class="form-group"><input class="form-control" type="text" placeholder="Ваше имя"></div>
                <div class="form-group"><input class="form-control" type="text" placeholder="Ваш город"></div>
                <div class="form-group"><input class="form-control" type="text" placeholder="E-mail"></div>
                <div class="form-group"><textarea class="form-control" placeholder="Ваше пожелания"></textarea></div><button class="btn btn-info" type="button">Отправить</button></form>
        </div>
    </div>
</div>