<?php
/**
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace legato1411\treeview;

use yii\web\AssetBundle;

/**
 * CKEditorWidgetAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\ckeditor
 */
class CKEditorWidgetAsset extends AssetBundle
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