<?php

use frontend\assets\CommunityAsset;

CommunityAsset::register($this);



/* @var $this \yii\web\View*/

$this->title = 'География общества';
$this->params['breadcrumbs'][] = $this->title;
?>
<h2><?= $this->title ?></h2>
<div id="map"></div>
<?php

$js =<<<JS
ymaps.ready(init);

function init () {
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
            clusterDisableClickZoom: true
        });
    
    // Чтобы задать опции одиночным объектам и кластерам,
    // обратимся к дочерним коллекциям ObjectManager.
    objectManager.objects.options.set('preset', 'islands#greenDotIcon');
    objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');
    myMap.geoObjects.add(objectManager);
    
    $.get({
        url: '/community/geography',
        dataType: 'json',
        success: function(result) {
            console.log(result);
            objectManager.add(result);
        },
        error: function() {
            alert('Возникла какая то ошибка, пожалуйста сообшите об этом администрации сайта');
        }
    });
}
JS;

$this->registerJs($js);
?>
