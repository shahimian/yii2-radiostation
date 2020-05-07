<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model shahimian\radiostation\models\RadioSource */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="radio-source-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'source_audio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source_picture')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datetime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
