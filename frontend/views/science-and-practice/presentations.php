<?php
use yii\widgets\ListView;
use yii\widgets\LinkPager;

$this->title = 'Презентации';
$this->params['breadcrumbs'][] = ['label' => 'Наука и практика', 'url' => ['science-and-practice/index']];
$this->params['breadcrumbs'][] = $this->title;

setlocale(LC_ALL,'ru_RU.utf8');
?>
<h2 class="presentations__title"><?= $this->title ?></h2>
<div class="presentations__list">
    <?=
    ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_presentation',
        'layout' => '{items}',
        'options' => [
            'class' => 'list-view grid'
        ],
        'itemOptions' => [
            'class' => 'presentation-item presentation-sizer'
        ]
    ]);
    ?>

    <?=
    LinkPager::widget([
        'pagination' => $dataProvider->getPagination(),
        'maxButtonCount' => 6,
        'options' => [
            'class' => 'presentations__pagination'
        ]
    ]);
    ?>
</div>
<?php
$js =<<<JS
$(document).ready(function() {
    $('.grid').masonry({
        // set itemSelector so .grid-sizer is not used in layout
        itemSelector: '.presentation-item',
        // use element for option
        columnWidth: '.presentation-sizer',
        percentPosition: true
    });
});
JS;

$this->registerJs($js);

?>