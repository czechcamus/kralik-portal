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
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    	'https://fonts.googleapis.com/css?family=Raleway',
	    'https://fonts.googleapis.com/icon?family=Material+Icons',
        'css/site.css'
    ];
    public $js = [
	    'vendor/materialize/js/materialize.min.js',
	    'js/site.js'
    ];
    public $depends = [
        'yii\web\YiiAsset'
    ];
}
