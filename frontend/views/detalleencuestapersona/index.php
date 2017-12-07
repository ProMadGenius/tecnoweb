<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetalleencuestapersonaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detalleencuestapersonas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalleencuestapersona-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detalleencuestapersona', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idencuesta',
            'idindicador',
            'descripcion',
            'respuesta',
            'usrcod',
            // 'iddetalle',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
