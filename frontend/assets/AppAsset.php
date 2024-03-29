<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/navigation.css',
        'css/footer-clean.css',
        'css/styles.css',
        'css/jquery-ui.css',
    ];
    public $js = [
        'js/masonary.js',
        'js/jquery-ui.js',
        'js/jquery-ui-ru.js',
    ];
    public $depends = [
        'frontend\assets\BootstrapAsset'
    ];
}
