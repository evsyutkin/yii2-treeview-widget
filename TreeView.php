<?php
/**
 * @link      https://github.com/legato1411/yii2-treeview-widget
 * @copyright Copyright (c) 2015 Evsyutkin Andrey
 */

namespace legato1411\treeview;

use yii\helpers\Html;
use yii\helpers\Json;

/**
 * The yii2-treeview-widget is a Yii 2 wrapper for the treeview.js
 * See more: http://bassistance.de/jquery-plugins/jquery-plugin-treeview
 *
 * @author Evsyutkin Andrey <andrey@evsyutkin.ru>
 */
class TreeView extends \yii\base\Widget
{
    /**
     * @var array
     */
    public $data = [];
    public $options = [];
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->registerAssets();
    }
    /**
     * Registers the needed assets
     */
    public function registerAssets()
    {
        $view = $this->getView();
        TreeViewAsset::register($view);
        $id = 'treeview_' . $this->id;

        if (isset($this->options['id'])) {
            $id = $this->options['id'];
            //unset($this->options['id']);
        } else {
            //echo Html::tag('div', '', ['id' => $id]);
            $this->options['id'] = $id;
        }

        $options = Json::encode($this->options);
        $view->registerJs('$("#' . $id . '").treeview( ' .$options .')');
    }

    public function run()
    {
        return '<ul id="'.$this->options['id'].'">'.self::saveDataAsHtml($this->data).'</ul>';
    }

    public static function saveDataAsHtml($data)
    {
        $html='';
        if(is_array($data)) {
            foreach($data as $node) {
                if(!isset($node['text'])) {
                    continue;
                }

                if(isset($node['expanded'])) {
                    $css = $node['expanded'] ? 'open' : 'closed';
                } else {
                    $css = '';
                }

                if(isset($node['hasChildren']) && $node['hasChildren']) {
                    if($css !== '') {
                        $css .= ' ';
                    }

                    $css .= 'hasChildren';
                }
                $options = isset($node['htmlOptions']) ? $node['htmlOptions'] : array();

                if ($css !== '') {
                    if (isset($options['class'])) {
                        $options['class'] .= ' '.$css;
                    } else {
                        $options['class'] = $css;
                    }
                }

                if (isset($node['id'])) {
                    $options['id'] = $node['id'];
                }

                $html .= Html::beginTag('li', $options);
                $html .= $node['text'];
                if(!empty($node['children'])) {
                    $html .= "\n<ul>\n";
                    $html .= self::saveDataAsHtml($node['children']);
                    $html .= "</ul>\n";
                }
                $html .= Html::endTag('li')."\n";
            }
        }
        return $html;
    }
}