<?php

use app\widgets\ListWidget;
use app\widgets\Message2Widget;
use app\widgets\MessageWidget;
use yii\bootstrap4\Button;
use yii\bootstrap4\ButtonGroup;
use yii\bootstrap4\Progress;
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

?>


<?= MessageWidget::widget(['message' => 'Hello world']); ?>


<?php Message2Widget::begin([
    'id' => 'message-2'
]); ?>

sample content that may contain one or more <strong>HTML</strong> <pre>tags</pre>

If this content grows too big, use sub views

For e.g.

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Вход', ['class' => 'btn btn-primary']) ?>
    </div>
</div>


<?php Message2Widget::end(); ?>


<?= ListWidget::widget([
    'itemClassList' => ['class-1', 'class-2'],
    'data' => ['item 1', 'item 2', 'item 3', 'item 4', 'item 5']
]) ?>

<?= ButtonGroup::widget([
    'options' => [
        'class' => ['widget' => 'btn-group-vertical'] // replaces 'btn-group' with 'btn-group-vertical'
    ],
    'buttons' => [
        Button::widget([
            'label' => 'A',
            'options' => ['class' => 'btn-secondary'],
        ]),
        Button::widget([
            'label' => 'B',
            'options' => ['class' => 'btn-secondary'],
        ])
    ]
]); ?>

<?= Progress::widget([
    'bars' => [
        ['percent' => 30, 'options' => ['class' => 'bg-danger']],
        ['percent' => 30, 'label' => 'test', 'options' => ['class' => 'bg-success']],
        ['percent' => 35, 'options' => ['class' => 'bg-warning']],
    ]
]) ?>



