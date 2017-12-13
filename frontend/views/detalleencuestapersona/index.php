<?php


use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;
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
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'iddetalle',
            'tituloencuesta',
            'textoindicador',

            'nombreusuario',
            'respuesta',



            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
