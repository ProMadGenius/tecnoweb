<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Grupos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grupos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'grupdescrip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grupobserv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grupest')->textInput() ?>

    <?= $form->field($model, 'admlogin')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
