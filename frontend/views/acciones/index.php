<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AccionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Acciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acciones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Acciones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'modcod',
            'acccod',
            'accdescrip',
            'accparametros',
            'accest',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
