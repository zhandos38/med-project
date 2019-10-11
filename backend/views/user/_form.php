<?php

use common\models\User;
use insolita\wgadminlte\LteBox;
use insolita\wgadminlte\LteConst;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

        <?php
        LteBox::begin([
            'type'=>LteConst::TYPE_INFO,
            'isSolid'=>true,
            'boxTools'=>Html::a('Назад <i class="fas fa-arrow-alt-circle-left"></i>', ['index'], ['class' => 'btn btn-danger btn-xs create_button']),
            'tooltip'=>'this tooltip description',
            'title'=>'Добавить пользователя'
        ])
        ?>

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username')->textInput() ?>

        <?= $form->field($model, 'full_name')->textInput() ?>

        <?= $form->field($model, 'password')->textInput() ?>

        <?= $form->field($model, 'email')->textInput() ?>

        <?= $form->field($model, 'phone')->widget(MaskedInput::className(), [
            'mask' => '+7(999)999-99-99',
            'clientOptions' => [
                'removeMaskOnSubmit' => true
            ]
        ]) ?>

        <?= $form->field($model, 'address')->textInput() ?>

        <?= $form->field($model, 'role')->dropDownList(User::getRoles(), ['prompt' => 'Указать роль']) ?>

        <?= $form->field($model, 'status')->dropDownList(User::getStatuses(), ['prompt' => 'Указать статус']) ?>

        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

        <?php LteBox::end()?>

</div>
