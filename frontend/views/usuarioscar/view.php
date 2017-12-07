<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarioscar */

$this->title = $model->idusrscar;
$this->params['breadcrumbs'][] = ['label' => 'Usuarioscars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuarioscar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idusrscar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idusrscar], [
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
            'idusrscar',
        ],
    ]) ?>

</div>
