<?php
use yii\widgets\ListView;
use yii\widgets\LinkPager;

$this->title = 'Клинически случай';
$this->params['breadcrumbs'][] = $this->title;
?>
<h2 class="clinic-cases__title"><?= $this->title ?></h2>
<div class="clinic-cases__list">

    <?=
        ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_clinic-case',
            'layout' => '{items}'
        ]);
    ?>
    <?=
        LinkPager::widget([
            'pagination' => $dataProvider->getPagination(),
            'maxButtonCount' => 3,
            'options' => [
                'class' => 'news__pagination'
            ]
        ]);
    ?>

</div>
