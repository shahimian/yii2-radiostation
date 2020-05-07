<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel shahimian\radiostation\models\RadioSourceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Radio Sources';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="radio-source-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Radio Source', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'source_id',
            'source_audio',
            'source_picture',
            'datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
