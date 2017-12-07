<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'Informacion para Cliente';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Selecciona la operacion
		
    </p>
    <p><?= Html::a('1 LISTA DE FACULTAD', ['/facultad'], ['class' => 'btn btn-success']) ?></p>
    <p><?= Html::a('2 LISTA DE MODELOS', ['/modelo'], ['class' => 'btn btn-success']) ?></p>
	<p><?= Html::a('3 LISTA DE INDICADORES', ['/indicador'], ['class' => 'btn btn-success']) ?></p>
	<p><?= Html::a('4 DURACION DE ENCUESTA', ['/encuesta'], ['class' => 'btn btn-success']) ?></p>
    <p><?= Html::a('5 LLENAR ENCUESTA', ['/detalleencuestapersona'], ['class' => 'btn btn-success']) ?></p>
    <code><?= __FILE__ ?></code>
</div>