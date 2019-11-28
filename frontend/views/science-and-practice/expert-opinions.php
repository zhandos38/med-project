<?php
use yii\widgets\ListView;
use yii\widgets\LinkPager;

$this->title = 'Учебные пособие';
$this->params['breadcrumbs'][] = ['label' => 'Наука и практика', 'url' => ['science-and-practice/index']];
$this->params['breadcrumbs'][] = $this->title;

/* @var $this \yii\web\View */
?>
<h2 class="expert-opinions__title"><?= $this->title ?></h2>
<div class="expert-opinions__list">

    <?=
    ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_expert-opinion',
        'layout' => '{items}',
        'options' => [
            'class' => 'list-view grid'
        ],
        'itemOptions' => [
            'class' => 'expert-opinions__item'
        ]
    ]);
    ?>

    <?=
    LinkPager::widget([
        'pagination' => $dataProvider->getPagination(),
        'maxButtonCount' => 6,
        'options' => [
            'class' => 'expert-opinions__pagination'
        ]
    ]);
    ?>

</div>
<?php
$js =<<<JS
$(document).ready(function() {
    $('.grid').masonry({
        // set itemSelector so .grid-sizer is not used in layout
        itemSelector: '.expert-opinions__item',
        // use element for option
        columnWidth: '.expert-opinions__item',
        percentPosition: true
    });
});
JS;

$this->registerJs($js);

?>
