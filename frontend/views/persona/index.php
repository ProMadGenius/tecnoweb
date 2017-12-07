<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Persona', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'usrcod',
            'usrpassword',
            'usrnom',
            'usrapp',
            'usrapm',
            // 'usrtelf',
            // 'usremail:email',
            // 'usrdir',
            // 'usrfechanac',
            // 'usrci',
            // 'usrprof',
            // 'usrfechainicio',
            // 'usrfechafin',
            // 'usrest',
            // 'grupcod',
            // 'admlogin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
