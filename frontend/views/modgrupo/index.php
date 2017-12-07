<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ModgrupoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modgrupos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modgrupo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Modgrupo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'grupcod',
            'modcod',
            'modgrupfechinstall',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
