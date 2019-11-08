<?php
use yii\widgets\ListView;
use yii\widgets\LinkPager;

$this->title = 'Публикации';
$this->params['breadcrumbs'][] = ['label' => 'Наука и практика', 'url' => ['science-and-practice/index']];
$this->params['breadcrumbs'][] = $this->title;

setlocale(LC_ALL,'ru_RU.utf8');
?>
<h2 class="publications__title"><?= $this->title ?></h2>
<div class="publications__list">
    <?=
    ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_publication',
        'layout' => '{items}',
        'options' => [
            'class' => 'list-view grid'
        ]
    ]);
    ?>

    <?=
    LinkPager::widget([
        'pagination' => $dataProvider->getPagination(),
        'maxButtonCount' => 6,
        'options' => [
            'class' => 'publications__pagination'
        ]
    ]);
    ?>
</div>