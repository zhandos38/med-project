<?php
use yii\widgets\ListView;
use yii\widgets\LinkPager;

$this->title = 'Учебные пособие';
$this->params['breadcrumbs'][] = ['label' => 'Наука и практика'];
$this->params['breadcrumbs'][] = $this->title;

/* @var $this \yii\web\View */
?>
<h2 class="members__title"><?= $this->title ?></h2>
<div class="members__list">

    <?=
    ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_tutorial',
        'layout' => '{items}',
        'options' => [
            'class' => 'list-view grid'
        ],
        'itemOptions' => [
            'class' => 'grid-item grid-sizer'
        ]
    ]);
    ?>

    <?=
    LinkPager::widget([
        'pagination' => $dataProvider->getPagination(),
        'maxButtonCount' => 6,
        'options' => [
            'class' => 'tutorial__pagination'
        ]
    ]);
    ?>

</div>
<?php
$js =<<<JS
$(document).ready(function() {
    $('.grid').masonry({
        // set itemSelector so .grid-sizer is not used in layout
        itemSelector: '.grid-item',
        // use element for option
        columnWidth: '.grid-sizer',
        percentPosition: true
    });
});
JS;

$this->registerJs($js);

?>
