<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Document */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Документы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
