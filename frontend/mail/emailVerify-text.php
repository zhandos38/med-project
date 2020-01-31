<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$verifyLink = Yii::$app->urlManager->createAbsoluteUrl(['site/verify-email', 'token' => $user->verification_token]);
?>
Привет <?= $user->username ?>,

Перейдите по ссылке для подтверждение аккаунта:

<?= $verifyLink ?>
