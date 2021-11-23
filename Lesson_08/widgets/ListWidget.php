<?php


namespace app\widgets;


use yii\base\Widget;

class ListWidget extends Widget
{
    public $data;
    public $itemClassList;

    private $itemStyle = '';
    public function init()
    {
        parent::init();

        if ($this->data === null) {
            $this->data = [];
        }
        if ($this->itemClassList === null) {
            $this->itemClassList = [];
        }
    }
    public function run() {
        $this->itemStyle = implode(' ', $this->itemClassList);

        $content = '<ul>';

        foreach ($this->data as $item) {
            $content .= "<li class='$this->itemStyle'>$item</li>";
        }

        $content .= '</ul>';
        return $content;
    }
}