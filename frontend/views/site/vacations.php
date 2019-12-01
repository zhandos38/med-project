<?php
use yii\widgets\ListView;

$this->title = 'Вакансии';

setlocale(LC_ALL,'ru_RU.utf8');
?>
<h2 class="vacations__title"></h2>
<div class="vacations__list">
    <?=
    ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_vacation',
        'options' => [
            'class' => 'list-view'
        ]
    ]);
    ?>
</div>
