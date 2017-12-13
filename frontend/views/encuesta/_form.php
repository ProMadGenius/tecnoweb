<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Encuesta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="encuesta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'idfacultad')->dropDownList($model->getFacultades()) ?>

    <?= $form->field($model, 'fechainicio')->textInput() ?>

    <?= $form->field($model, 'fechafin')->textInput() ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_id')->dropDownList($model->getUsuarios()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
