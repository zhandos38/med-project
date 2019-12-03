    <?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use common\models\User;

$this->title = 'Зарегистрироваться';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Заполните поля ниже чтобы зарегистрироваться</p>

    <div class="row">
        <div class="col-lg-8">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'full_name')->textInput() ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'password_repeat')->passwordInput() ?>

                <?= $form->field($model, 'workplace') ?>

                <?= $form->field($model, 'degree') ?>

                <?= $form->field($model, 'phone')->widget(MaskedInput::className(), [
                    'mask' => '+7(999)999-99-99',
                    'clientOptions' => [
                        'removeMaskOnSubmit' => true
                    ]
                ]) ?>

                <?= $form->field($model, 'speciality') ?>

                <?= $form->field($model, 'position') ?>

                <?= $form->field($model, 'description')->textarea() ?>

                <?= $form->field($model, 'city')->dropDownList(User::getCities(), ['prompt' => 'Выберите город']) ?>

                <?= $form->field($model, 'birthday')->textInput(['id' => 'date-picker']) ?>

                <div class="form-group">
                    <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<?php
$js =<<<JS
$('#date-picker').datepicker({
    changeMonth: true,
    changeYear: true,
    yearRange: '1960:2000',
    dateFormat : 'dd.mm.yy',
    defaultDate: new Date(1985, 00, 01)
});
JS;

$this->registerJs($js);
?>
