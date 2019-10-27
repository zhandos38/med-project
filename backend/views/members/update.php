<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Member */

$this->title = 'Редактирование: ' . $model->full_name;
$this->params['breadcrumbs'][] = ['label' => 'Члены общество', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="member-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
