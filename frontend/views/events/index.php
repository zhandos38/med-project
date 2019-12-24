<?php
use yii\widgets\ListView;
use yii\bootstrap4\LinkPager;


$this->title = 'Мероприятия';
$this->params['breadcrumbs'][] = $this->title;

setlocale(LC_ALL, "");
setlocale(LC_ALL,'ru_RU.utf8');
?>
<h2 class="news__title"><?= $this->title ?></h2>
<div class="news__list">

    <?=
    ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_event',
        'layout' => '{items}'
    ]);
    ?>
    <?=
    LinkPager::widget([
        'pagination' => $dataProvider->getPagination(),
        'maxButtonCount' => 6,
        'options' => [
            'class' => 'events__pagination'
        ]
    ]);
    ?>

</div>
