<?php
use common\models\Post;

/* @var Post $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['/news/index']];
$this->params['breadcrumbs'][] = $this->title;

$imgPath = Yii::$app->params['staticDomain'] . '/posts/';
?>
<h2 class="news__title">
    <strong>
        <?= $model->title ?>
    </strong>
    <br>
</h2>
<div class="news__content-view">
    <?= $model->content ?>
</div>
<div class="news__comment">
    <h2>Комментарии</h2>
    <p><em>*Оставлять комментарии могут только зарегистрированные пользователи.&nbsp;</em><a href="https://rnoik.ru/personal/?register=yes"><em>Зарегистрируйтесь</em></a><em>&nbsp;или&nbsp;</em><a href="https://rnoik.ru/personal/"><em>авторизируйтесь</em></a><br></p>
</div>