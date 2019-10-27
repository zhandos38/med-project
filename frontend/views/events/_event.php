<?php
/* @var $model \common\models\Event */
?>
<div class="event__item-wrapper">
    <a class="event__item" href="<?= \yii\helpers\Url::to(['news/view', 'id' => $model->id]) ?>">
        <div class="event__box">
            <div class="event__name">
                <?= $model->name ?>
            </div>
            <div class="event__info">
                <div class="event__where">
                    <div class="event__hint">
                        Где
                    </div>
                    <?= $model->where ?>
                </div>
                <div class="event__when">
                    <div class="event__hint">
                        Когда
                    </div>
                    <?= strftime("%a %d", $model->start_at) ?> - <?= strftime("%a %d %B %Y", $model->finish_at) ?>
                </div>
                <div class="event__place">
                    <div class="event__hint">
                        Место
                    </div>
                    <?= $model->place ?>
                </div>
            </div>
        </div>
    </a>
</div>