<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Detalleencuestapersona */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalleencuestapersona-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idencuesta')->textInput() ?>

    <?= $form->field($model, 'idindicador')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'respuesta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usrcod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iddetalle')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
