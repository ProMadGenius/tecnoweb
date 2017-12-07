<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Acciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="acciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'modcod')->textInput() ?>

    <?= $form->field($model, 'acccod')->textInput() ?>

    <?= $form->field($model, 'accdescrip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accparametros')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accest')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
