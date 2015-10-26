<?php
namespace app\themes\white\assets;

class AppAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@app/themes/white/assets/source';
//    public $js = [
//        'jquery.js',
//    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
