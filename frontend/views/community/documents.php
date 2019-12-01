<?php
use yii\widgets\ListView;
use yii\widgets\LinkPager;

$this->title = 'Документы';
$this->params['breadcrumbs'][] = ['label' => 'Общество', 'url' => ['about']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h2 class="documents__title"><?= $this->title ?></h2>
<div class="documents__list">

        <?=
        ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_document',
            'layout' => '{items}',
            'options' => [
                'class' => [
                    'list-view',
                    'row'
                ]
            ],
            'itemOptions' => [
                'class' => [
                    'col-md-4 document__item-wrapper'
                ]
            ]
        ]);
        ?>

    <?=
        LinkPager::widget([
            'pagination' => $dataProvider->getPagination(),
            'maxButtonCount' => 6,
            'options' => [
                'class' => 'documents__pagination'
            ]
        ]);
    ?>

</div>
