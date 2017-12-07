<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarioscar */

$this->title = 'Update Usuarioscar: ' . $model->idusrscar;
$this->params['breadcrumbs'][] = ['label' => 'Usuarioscars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idusrscar, 'url' => ['view', 'id' => $model->idusrscar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usuarioscar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
