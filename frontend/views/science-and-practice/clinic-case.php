<?php
use common\models\Post;

/* @var Post $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Наука и практика', 'url' => ['science-and-practice/index']];
$this->params['breadcrumbs'][] = ['label' => 'Публикации', 'url' => ['/science-and-practice/publications']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h2 class="clinic-case__title">
    <strong>
        <?= $model->title ?>
    </strong>
    <br>
</h2>
<div class="clinic-case__content-view">
    <?= $model->content ?>
</div>
<div class="clinic-case__comment">
    <h2>Комментарии</h2>
    <p><em>*Оставлять комментарии могут только зарегистрированные пользователи.&nbsp;</em><a href="https://rnoik.ru/personal/?register=yes"><em>Зарегистрируйтесь</em></a><em>&nbsp;или&nbsp;</em><a href="https://rnoik.ru/personal/"><em>авторизируйтесь</em></a><br></p>
</div>