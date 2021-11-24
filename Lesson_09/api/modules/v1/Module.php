<?php

namespace app\api\modules\v1;

class Module extends \yii\base\Module
{
    public $defaultController = 'products';
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\api\modules\v1\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }
}