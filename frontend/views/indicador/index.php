<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IndicadorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Indicadors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indicador-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Indicador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'descripcion',
            'metrica',
            'idmodelo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
