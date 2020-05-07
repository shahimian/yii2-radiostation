<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model shahimian\radiostation\models\RadioSource */

$this->title = 'Update Radio Source: ' . $model->source_id;
$this->params['breadcrumbs'][] = ['label' => 'Radio Sources', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->source_id, 'url' => ['view', 'id' => $model->source_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="radio-source-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
