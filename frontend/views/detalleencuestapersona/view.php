<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Detalleencuestapersona */

$this->title = $model->iddetalle;
$this->params['breadcrumbs'][] = ['label' => 'Detalleencuestapersonas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalleencuestapersona-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->iddetalle], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->iddetalle], [
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
            'idencuesta',
            'idindicador',
            'respuesta',
            'usrcod',
            'iddetalle',
        ],
    ]) ?>

</div>
