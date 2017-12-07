<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AccionesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="acciones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'modcod') ?>

    <?= $form->field($model, 'acccod') ?>

    <?= $form->field($model, 'accdescrip') ?>

    <?= $form->field($model, 'accparametros') ?>

    <?= $form->field($model, 'accest') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
