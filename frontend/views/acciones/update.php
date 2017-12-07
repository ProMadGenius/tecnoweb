<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Acciones */

$this->title = 'Update Acciones: ' . $model->modcod;
$this->params['breadcrumbs'][] = ['label' => 'Acciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->modcod, 'url' => ['view', 'modcod' => $model->modcod, 'acccod' => $model->acccod]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="acciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
