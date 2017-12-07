<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdministradorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="administrador-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'admlogin') ?>

    <?= $form->field($model, 'admpassword') ?>

    <?= $form->field($model, 'admpadre') ?>

    <?= $form->field($model, 'admfechinicial') ?>

    <?= $form->field($model, 'admfechafinal') ?>

    <?php // echo $form->field($model, 'grupocod') ?>

    <?php // echo $form->field($model, 'admest') ?>

    <?php // echo $form->field($model, 'ustcod') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
