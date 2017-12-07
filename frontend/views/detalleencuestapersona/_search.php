<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetalleencuestapersonaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalleencuestapersona-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idencuesta') ?>

    <?= $form->field($model, 'idindicador') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'respuesta') ?>

    <?= $form->field($model, 'usrcod') ?>

    <?php // echo $form->field($model, 'iddetalle') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
