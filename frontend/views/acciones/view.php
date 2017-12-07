<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Acciones */

$this->title = $model->modcod;
$this->params['breadcrumbs'][] = ['label' => 'Acciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acciones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'modcod' => $model->modcod, 'acccod' => $model->acccod], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'modcod' => $model->modcod, 'acccod' => $model->acccod], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'modcod',
            'acccod',
            'accdescrip',
            'accparametros',
            'accest',
        ],
    ]) ?>

</div>
