<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class IndexAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/best-carousel-slide.css',
        'css/blog-page.css',
        'css/client-logo-slider.css',
        'css/dh-card-image-left-dark.css',
        'css/footer-clean.css',
        'css/navigation.css',
        'css/projects-horizontal.css',
        'css/styles.css',
    ];
    public $js = [
        'js/client-logo-slider.js'
    ];
    public $depends = [
//        'yii\web\YiiAsset',
        'frontend\assets\BootstrapAsset'
    ];
}
