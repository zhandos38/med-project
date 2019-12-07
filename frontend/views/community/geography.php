<?php

use frontend\assets\CommunityAsset;

CommunityAsset::register($this);



/* @var $this \yii\web\View*/

$this->title = 'География общества';
$this->params['breadcrumbs'][] = $this->title;
?>
<h2><?= $this->title ?></h2>
<div id="map"></div>
<div class="geography__filters">
    <input class="filter-checkbox" type="checkbox" value="Больница" checked>Больница
    <input class="filter-checkbox" type="checkbox" value="Аптека" checked>Аптека
    <input class="filter-checkbox" type="checkbox" value="Кафе" checked>Кафе
</div>
<?php
$js =<<<JS
ymaps.ready(init);

function init () {
    let marks = $marks;
    var myMap = new ymaps.Map("map", {
            center: [51.198222, 71.416985],
            zoom: 10
        }, {
            searchControlProvider: 'yandex#search'
        }),
        objectManager = new ymaps.ObjectManager({
            // Чтобы метки начали кластеризоваться, выставляем опцию.
            clusterize: true,
            // ObjectManager принимает те же опции, что и кластеризатор.
            gridSize: 32,
            clusterIconLayout: "default#pieChart"
        });
    
    let hospitals = {
        "type": "FeatureCollection",
        "features": marks
    };
    objectManager.add(marks);
    objectManager.events.add('click', function(e) {
        console.log('Привет яндекс ' + e.get('objectId'));
    });
    
    /* Добавления objectManager на карту */
    myMap.geoObjects.add(objectManager);
    
    /* Проверка фильтров */
    $('.filter-checkbox').on('change', function(event) {
        let filterQuery = '';
        let checkboxesLength = $('.filter-checkbox:checked').length;
        $('.filter-checkbox:checked').each(function(index) {
            let item = $(this);
            filterQuery += 'properties.type == "' + item.val() + '"';
            if (index !== checkboxesLength - 1)
                filterQuery += ' || ';
        });
        objectManager.setFilter(filterQuery);
        console.log(filterQuery);
    });
}
JS;

$this->registerJs($js);
?>
