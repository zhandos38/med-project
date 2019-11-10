<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Presentation */

$this->title = 'Обновить презентацию: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Презентации', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="presentation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
