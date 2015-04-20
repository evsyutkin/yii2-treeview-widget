<?php

namespace legato1411\treeview;

use yii\web\AssetBundle;

class TreeViewAsset extends AssetBundle
{
    public $sourcePath = '@vendor/legato1411/yii2-treeview-widget/src/assets';

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