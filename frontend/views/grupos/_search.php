<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GruposSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grupos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'grupcod') ?>

    <?= $form->field($model, 'grupdescrip') ?>

    <?= $form->field($model, 'grupobserv') ?>

    <?= $form->field($model, 'grupest') ?>

    <?= $form->field($model, 'admlogin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
