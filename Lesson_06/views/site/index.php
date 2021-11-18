<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

$form = ActiveForm::begin([
    'id' => 'create-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>

<ul>
    <?php
    if (isset($errors) && count($errors) > 0) {
        foreach($errors as $error) {
            echo "<li>$error</li>";
        }
    }
    ?>
</ul>


<?= $form->field($model, 'value') ?>
<?= Html::submitButton() ?>

<?php ActiveForm::end() ?>