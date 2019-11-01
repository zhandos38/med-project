<?php
use common\models\Member;

/* @var Member $model */

$this->title = $model->full_name;
$this->params['breadcrumbs'][] = ['label' => 'Члены общество', 'url' => ['/community/index']];
$this->params['breadcrumbs'][] = $this->title;

$imgPath = Yii::$app->params['staticDomain'] . '/web/members/';
?>
<div class="row">
    <div class="col-md-4">
        <img class="member-view__image" src="<?= $imgPath . $model->image ?>">
    </div>
    <div class="col-md-8">
        <h2 class="member-view__title">
            <?= $model->full_name ?>
        </h2>
        <div class="member-view__content">
            <?= $model->description ?>
        </div>
        <div class="member-view__email">
            <i class="member-view__envelope-icon fa fa-envelope"></i><?= $model->email ?>
        </div>
    </div>
</div>