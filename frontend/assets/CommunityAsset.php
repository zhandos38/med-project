<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CommunityAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/navigation.css',
        'css/footer-clean.css',
        'css/styles.css',
    ];
    public $js = [
        'https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=d34c80c4-76cc-409b-ba43-c82c959d83c8'
    ];
    public $depends = [
        'frontend\assets\BootstrapAsset'
    ];
}
