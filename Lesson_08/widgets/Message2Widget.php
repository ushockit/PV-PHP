<?php


namespace app\widgets;


use yii\base\Widget;

class Message2Widget extends Widget
{
    public $id;
    public function init()
    {
        parent::init();
        ob_start();
    }
    public function run()
    {
        $content = ob_get_clean();
        // return Html::encode($content);
        return $content;
    }
}