<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

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
        'css/style.css',
        //'css/bootstrap.css',
        'css/main.css',
        //'css/font-awesome.css',
        'css/flaticon.css',
        'css/linea_iconfont.css',
        //'css/style(1).css',
        'css/custom-skin.css'
    ];
    public $js = [
        // 'js/jquery.js',
        'js/jquery-migrate.min.js',
        'js/jquery.cycle2.renamed.js',
        'js/jquery.cycle2.scrollVert.renamed.js',
        'js/jquery.cycle2.carousel.renamed.js',
        //'js/bootstrap.min.js',
        'js/joinable.min.js',
        'js/wp-embed.min.js',
        'js/custom.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'common\assets\FontAwesome',
    ];
}
