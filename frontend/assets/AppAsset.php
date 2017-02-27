<?php

namespace frontend\assets;
use Yii;
use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        '//fonts.googleapis.com/css?family=Lora:400,400i%7CPoppins:300,400,500,600',
        'themes/css/styles.css',
        'themes/css/themes/theme-credit.css'
    ];
    public $js = [
        'themes/js/jquery-1.12.3.min.js',
        'themes/js/plugins.js',
        'themes/js/core.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
    
    public function init() {
		//print_r(Yii::$app->controller->id);exit;
		if (Yii::$app->controller->id == 'calculator') {
			array_push($this->js, '//www.gstatic.com/charts/loader.js');

		}
	}
}
