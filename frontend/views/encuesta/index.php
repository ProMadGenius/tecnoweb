<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\EncuestaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Encuestas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encuesta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Encuesta', ['create'], ['class' => 'btn btn-success']) ?>
        <br>
        <br>
        <a href="<?= Url::toRoute("encuesta/indice")?>">Ir a mi vista Personalizada</a>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombrefacultad',
            'fechainicio',
            'fechafin',
            'titulo',
            'usuario_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
