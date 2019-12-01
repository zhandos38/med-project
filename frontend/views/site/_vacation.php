<?php

/* @var \common\models\Vacation $model */
?>
<a href="<?= \yii\helpers\Url::to(['science-and-practice/vacation', 'id' => $model->id]) ?>" class="vacation__link">
    <div class="vacation__box">
        <div class="vacation__date">
            <?= strftime("%a %d %B %Y", $model->created_at)  ?>
        </div>
        <div class="vacation__name">
            <?= $model->name ?>
        </div>
        <div class="statute__download">
            <a class="blue-link-button btn" href="#">
                <span>Подробнее</span>
            </a>
        </div>
    </div>
</a>
