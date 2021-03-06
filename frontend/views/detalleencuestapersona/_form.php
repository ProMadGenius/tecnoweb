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

    <?= $form->field($model, 'idindicador')->dropDownList($model->getIndicador()) ?>


    <?= $form->field($model, 'usrcod')->dropDownList($model->getUsuarios()) ?>


    <?= $form->field($model, 'respuesta')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
