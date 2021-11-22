<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'options' => [
        'class' => 'form-horizontal',
        'enctype' => 'multipart/form-data'
    ],
]) ?>
<?= $form->field($model, 'firstName') ?>
<?= $form->field($model, 'lastName') ?>
<?= $form->field($fileModel, 'imageFile')->fileInput() ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Вход', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>