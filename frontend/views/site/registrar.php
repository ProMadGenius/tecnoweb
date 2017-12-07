<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Registrar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-registrar">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Porfavor llene los siguientes datos para registrarse:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'usrcod')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'usrpassword')->passwordInput() ?>
            <?= $form->field($model, 'usrnom')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'usrapp')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'usrapm')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'usrtelf')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'usremail') ?>
            <?= $form->field($model, 'usrdir')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'usrfechanac')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'usrlugarnac')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'usrci')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'usrprof')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'usrfechainicio')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'usrfechafinal')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'usrest')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'grupcod')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'admlogin')->textInput(['autofocus' => true]) ?>



            <div class="form-group">
                <?= Html::submitButton('Registrar', ['class' => 'btn btn-primary', 'name' => 'Registrar-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
