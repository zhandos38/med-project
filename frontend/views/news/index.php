<?php
use yii\widgets\ListView;
use yii\widgets\LinkPager;

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<h2 class="news__title"><?= $this->title ?></h2>
<div class="news__list">

    <?=
        ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_news',
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
