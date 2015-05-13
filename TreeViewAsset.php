<?php

/**
 * @link      https://github.com/legato1411/yii2-treeview-widget
 * @copyright Copyright (c) 2015 Evsyutkin Andrey
 */

namespace legato1411\treeview;

use yii\web\AssetBundle;

/**
 * Asset bundle for treeview widget
 *
 * @author Evsyutkin Andrey <evsyutkin@andrey.ru>
 */
class TreeViewAsset extends AssetBundle
{
    public $sourcePath = '@vendor/legato1411/yii2-treeview-widget/assets';

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public $js = [
        'js/jquery.treeview.js'
    ];

    public $css = [
        'css/jquery.treeview.css'
    ];
}