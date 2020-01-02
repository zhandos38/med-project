<?php
use common\models\Post;

/* @var Post $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Наука и практика'];
$this->params['breadcrumbs'][] = ['label' => 'Публикации', 'url' => ['/science-and-practice/publications']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h2 class="publication__title">
    <strong>
        <?= $model->title ?>
    </strong>
    <br>
</h2>
<div class="publication__content-view">
    <?= $model->content ?>
</div>
    <div class="comments__wrapper">
        <p><em>*Оставлять комментарии могут только зарегистрированные пользователи.&nbsp;</em><a href="<?= Url::to(['site/signup']) ?>"><em>Зарегистрируйтесь</em></a><em>&nbsp;или&nbsp;</em><a href="<?= Url::to(['site/login']) ?>"><em>авторизируйтесь</em></a><br></p>
    </div>
<?= \yii2mod\comments\widgets\Comment::widget([
    'model' => $model,
]); ?>