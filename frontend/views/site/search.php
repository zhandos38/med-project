<?php
use yii\widgets\ListView;
use yii\widgets\LinkPager;

$this->title = 'Пойск';
$this->params['breadcrumbs'][] = $this->title;
?>
<h2 class="search-item__title"><?= $this->title ?></h2>
<div class="search-item__list">

    <?=
        ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_search_item',
            'layout' => '{items}'
        ]);
    ?>
    <?=
        LinkPager::widget([
            'pagination' => $dataProvider->getPagination(),
            'maxButtonCount' => 3,
            'options' => [
                'class' => 'search__pagination'
            ]
        ]);
    ?>

</div>
