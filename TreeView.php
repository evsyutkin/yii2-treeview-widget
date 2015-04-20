<?php

namespace legato1411\treeview;
use yii\helpers\Html;
use yii\helpers\Json;


class TreeView extends \yii\base\Widget
{
    /**
     * @var array
     */
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
//
    }
}