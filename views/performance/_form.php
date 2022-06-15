<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Performance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="performance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idTask')->textInput() ?>

    <?= $form->field($model, 'idEmployee')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
