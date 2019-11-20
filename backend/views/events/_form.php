<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'where')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createTimeRange')->widget(\kartik\daterange\DateRangePicker::className(), [
        'convertFormat' => true,
        'pluginOptions' => [
            'locale' => [
                'format'=>'Y-m-d'
            ],
            'convertFormat'=>true,
        ]
    ]) ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>