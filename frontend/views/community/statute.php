<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\ForbiddenHttpException;

$this->title = 'Устав';
$this->params['breadcrumbs'][] = ['label' => 'Общество', 'url' => ['about']];
$this->params['breadcrumbs'][] = $this->title;

?>
<h2 class="statute__title"><strong>Устав</strong></h2>
<div class="row">
    <div class="col-md-5">
        <img class="statute__img" src="/img/ustav_rnoik.jpg">
    </div>
    <div class="col-md-7">
        <div class="statute__content">
            <p>Утвержден учредительным собранием — 20 апреля 1998 года.</p>
            <p>Изменения и дополнения в Устав утверждены Конференцией — 1 июня 2000 года</p>
        </div>
        <div class="statute__download">
            <a class="blue-link-button btn" href="/documents/statute.pdf" download>
                <span>Скачать устав</span>
            </a>
            <div class="statute__document-info">
                PDF, 9.8 MB
            </div>
        </div>
    </div>
</div>