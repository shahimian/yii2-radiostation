<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model shahimian\radiostation\models\RadioSource */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="radio-source-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'source_audio_file')->fileInput() ?>

    <?= $form->field($model, 'source_picture_file')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
