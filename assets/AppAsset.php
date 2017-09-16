<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    //public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $sourcePath = '@bower/sedna';
    public $css = [
        'css/normalize.min.css',
        'css/bootstrap.min.css',
        'css/jquery.fancybox.css',
        'css/flexslider.css',
        'css/styles.css',
        'css/queries.css',
        'css/etline-font.css',
        'bower_components/animate.css/animate.min.css',
        'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'
    ];
    public $js = [
        'js/vendor/jquery-1.11.2.min.js',
        'bower_components/retina.js/dist/retina.js',
        'js/jquery.fancybox.pack.js',
        'js/vendor/bootstrap.min.js',
        'js/scripts.js',
        'js/jquery.flexslider-min.js',
        'bower_components/classie/classie.js',
        'bower_components/jquery-waypoints/lib/jquery.waypoints.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
