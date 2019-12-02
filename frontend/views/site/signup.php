    <?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Зарегистрирвать';
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

                <?= $form->field($model, 'phone') ?>

                <?= $form->field($model, 'speciality') ?>

                <?= $form->field($model, 'position') ?>

                <?= $form->field($model, 'description')->textarea() ?>

                <?= $form->field($model, 'city') ?>

                <?= $form->field($model, 'birthday') ?>

                <div class="form-group">
                    <?= Html::submitButton('Зарегистрирвать', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
