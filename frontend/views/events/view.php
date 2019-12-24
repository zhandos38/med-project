<?php
use common\models\Event;
use rmrevin\yii\module\Comments;
use yii\helpers\Url;

/* @var Event $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['/event/index']];
$this->params['breadcrumbs'][] = $this->title;

$imgPath = Yii::$app->params['staticDomain'] . '/event/';
?>
<h2 class="event__title">
    <strong>
        <?= $model->name ?>
    </strong>
    <br>
</h2>
<div class="event__content-view">
    <?= $model->content ?>
</div>
<div class="event__comment">
    <p><em>*Оставлять комментарии могут только зарегистрированные пользователи.&nbsp;</em><a href="<?= Url::to(['site/signup']) ?>"><em>Зарегистрируйтесь</em></a><em>&nbsp;или&nbsp;</em><a href="<?= Url::to(['site/login']) ?>"><em>авторизируйтесь</em></a><br></p>
</div>
<?=  Comments\widgets\CommentListWidget::widget([
    'entity' => (string) 'event-' . $model->id, // type and id
]);
?>