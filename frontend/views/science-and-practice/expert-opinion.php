<?php
use common\models\Post;
use yii\helpers\Url;

/* @var Post $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Наука и практика'];
$this->params['breadcrumbs'][] = ['label' => 'Рекомендаций', 'url' => ['/science-and-practice/expert-opinions']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h2 class="v-expert-opinion__title">
    <strong>
        <?= $model->title ?>
    </strong>
    <br>
</h2>
<div class="v-expert-opinion__content-view">
    <?= $model->content ?>
</div>
    <div class="comments__wrapper">
        <p><em>*Оставлять комментарии могут только зарегистрированные пользователи.&nbsp;</em><a href="<?= Url::to(['site/signup']) ?>"><em>Зарегистрируйтесь</em></a><em>&nbsp;или&nbsp;</em><a href="<?= Url::to(['site/login']) ?>"><em>авторизируйтесь</em></a><br></p>
    </div>