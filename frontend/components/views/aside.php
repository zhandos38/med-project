<?php
setlocale(LC_ALL,'ru_RU.utf8');

/* @var $expertOpinion \common\models\Post */
?>
<div class="aside-event">
    <h2 class="aside-event__header"><strong>Мероприятия</strong><br></h2>
    <?php foreach ($lastEvents as $event): ?>
    <div class="aside-event__item-wrapper">
        <a class="aside-event__item" href="<?= \yii\helpers\Url::to(['events/view', 'id' => $event->id]) ?>">
            <div class="aside-event__item-box">
                <div class="aside-event__date">
                    <span><?= strftime("%a %d", $event->start_at) ?> - <?= strftime("%a %d %B %Y", $event->finish_at) ?><br></span>
                </div>
                <p class="aside-event__text"><?= mb_strimwidth($event->name,0,255,'...') ?><br></p>
            </div>
        </a>
    </div>
    <?php endforeach; ?>
    <div class="aside-event"></div>
</div>
<div class="aside-expert-opinion">
    <h2 class="aside-expert-opinion__header"><strong>Экспертные мнения</strong><br></h2>
    <div class="aside-expert-opinion__item">
        <a class="aside-expert-opinion__link-wrapper" href="<?= \yii\helpers\Url::to(['science-and-practice/expert-opinion', 'id' => $expertOpinion->id]) ?>">
        <div class="aside-expert-opinion__box">
            <div><span><?= $expertOpinion->topic ?><br></span></div>
            <div class="aside-expert-opinion__title">
                <p><?= $expertOpinion->title ?><br></p>
            </div>
            <div><span><?= $expertOpinion->author ?><br></span></div>
        </div>
        </a>
    </div>
</div>