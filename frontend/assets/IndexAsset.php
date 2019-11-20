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
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/best-carousel-slide.css',
        'css/blog-page.css',
        'css/dh-card-image-left-dark.css',
        'css/footer-clean.css',
        'css/navigation.css',
        'css/styles.css'
    ];
    public $js = [
        'js/owl.carousel.min.js'
    ];
    public $depends = [
//        'yii\web\YiiAsset',
        'frontend\assets\BootstrapAsset'
    ];
}
