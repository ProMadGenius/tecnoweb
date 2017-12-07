<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Administrador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="administrador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'admlogin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admpassword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admpadre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admfechinicial')->textInput() ?>

    <?= $form->field($model, 'admfechafinal')->textInput() ?>

    <?= $form->field($model, 'grupocod')->textInput() ?>

    <?= $form->field($model, 'admest')->textInput() ?>

    <?= $form->field($model, 'ustcod')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
