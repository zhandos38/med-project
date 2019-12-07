<?php

use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\assets\MarkAsset;

MarkAsset::register($this);

/* @var $this yii\web\View */
/* @var $model common\models\Mark */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mark-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'type_id')->dropDownList(\common\models\Mark::getTypesLabel(), ['prompt' => 'Выберите тип']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'floors')->dropDownList([
                    1 => '1',
                    2 => '2',
                    3 => '3',
                    4 => '4',
                    5 => '5',
            ]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'built_at')->textInput() ?>
        </div>
    </div>

    <div class="col-md-12">
        <label>Укажите адрес объекта на карте</label>
        <div id="map" style="width: 100%; height: 400px; margin-bottom: 15px"></div>
        <div class="row">
            <div class="col-xs-6">
                <?= $form->field($model, 'latitude')->textInput(['id' => 'latitude', 'readonly'=> true]) ?> <br/>
            </div>
            <div class="col-xs-6">
                <?= $form->field($model, 'longitude')->textInput(['id' => 'longitude', 'readonly'=> true]) ?>
            </div>
        </div>
    </div>

    <?= $form->field($model, 'destination')->widget(CKEditor::className(),[
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>