<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'Informacion para Administrador';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="administracion-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Selecciona la operacion

    </p>
    <p><?= Html::a('1 LISTA DE ADMINISTRADORES', ['/administrador'], ['class' => 'btn btn-success']) ?></p>
    <p><?= Html::a('2 LISTA DE GRUPOS', ['/grupos'], ['class' => 'btn btn-success']) ?></p>
    <p><?= Html::a('3 LISTA DE PERSONAS REGISTRADAS', ['/persona'], ['class' => 'btn btn-success']) ?></p>
    <p><?= Html::a('4 LISTA MODULOS', ['/modulo'], ['class' => 'btn btn-success']) ?></p>
    <p><?= Html::a('5 LLENAR MODULOS Y GRUPOS', ['/modgrupo'], ['class' => 'btn btn-success']) ?></p>
    <p><?= Html::a('6 LLENAR ACCIONES', ['/acciones'], ['class' => 'btn btn-success']) ?></p>
    <code><?= __FILE__ ?></code>
</div>