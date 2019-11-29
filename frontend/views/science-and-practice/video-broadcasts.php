<?php
use yii\widgets\ListView;
use yii\widgets\LinkPager;

$this->title = 'Видеотрансляции и архив';
$this->params['breadcrumbs'][] = ['label' => 'Наука и практика'];
$this->params['breadcrumbs'][] = $this->title;

/* @var $this \yii\web\View */
?>
<h2 class="video-broadcast__title"><?= $this->title ?></h2>
<div class="video-broadcast__list">

    <?=
    ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_video-broadcast',
        'layout' => '{items}',
        'options' => [
            'class' => 'list-view grid'
        ],
        'itemOptions' => [
            'class' => 'video-broadcast__item'
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
        itemSelector: '.video-broadcast__item',
        // use element for option
        columnWidth: '.video-broadcast__item',
        percentPosition: true
    });
});
JS;

$this->registerJs($js);

?>
