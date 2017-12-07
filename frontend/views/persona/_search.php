<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PersonaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persona-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'usrcod') ?>

    <?= $form->field($model, 'usrpassword') ?>

    <?= $form->field($model, 'usrnom') ?>

    <?= $form->field($model, 'usrapp') ?>

    <?= $form->field($model, 'usrapm') ?>

    <?php // echo $form->field($model, 'usrtelf') ?>

    <?php // echo $form->field($model, 'usremail') ?>

    <?php // echo $form->field($model, 'usrdir') ?>

    <?php // echo $form->field($model, 'usrfechanac') ?>

    <?php // echo $form->field($model, 'usrci') ?>

    <?php // echo $form->field($model, 'usrprof') ?>

    <?php // echo $form->field($model, 'usrfechainicio') ?>

    <?php // echo $form->field($model, 'usrfechafin') ?>

    <?php // echo $form->field($model, 'usrest') ?>

    <?php // echo $form->field($model, 'grupcod') ?>

    <?php // echo $form->field($model, 'admlogin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
