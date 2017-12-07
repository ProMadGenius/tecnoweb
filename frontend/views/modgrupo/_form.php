<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Modgrupo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modgrupo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'grupcod')->textInput() ?>

    <?= $form->field($model, 'modcod')->textInput() ?>

    <?= $form->field($model, 'modgrupfechinstall')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
