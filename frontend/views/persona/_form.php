<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Persona */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persona-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usrcod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usrpassword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usrnom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usrapp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usrapm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usrtelf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usremail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usrdir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usrfechanac')->textInput() ?>

    <?= $form->field($model, 'usrci')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usrprof')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usrfechainicio')->textInput() ?>

    <?= $form->field($model, 'usrfechafin')->textInput() ?>

    <?= $form->field($model, 'usrest')->textInput() ?>

    <?= $form->field($model, 'grupcod')->textInput() ?>

    <?= $form->field($model, 'admlogin')->textInput(['maxlength' => true]) ?>

    

    




    <?= $form->field($model, 'tipousuario_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
