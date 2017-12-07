<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Detalleencuestapersona */

$this->title = 'Update Detalleencuestapersona: ' . $model->iddetalle;
$this->params['breadcrumbs'][] = ['label' => 'Detalleencuestapersonas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iddetalle, 'url' => ['view', 'id' => $model->iddetalle]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detalleencuestapersona-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
