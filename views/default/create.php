<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model shahimian\radiostation\models\RadioSource */

$this->title = 'Create Radio Source';
$this->params['breadcrumbs'][] = ['label' => 'Radio Sources', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="radio-source-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
