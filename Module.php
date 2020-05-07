<?php

namespace shahimian\radiostation;

use shahimian\radiostation\models\migrations\RadioSource;

/**
 * radiostation module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'shahimian\radiostation\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        (new RadioSource())->up();
    }
}
