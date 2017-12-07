<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Administrador */

$this->title = 'Update Administrador: ' . $model->admlogin;
$this->params['breadcrumbs'][] = ['label' => 'Administradors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->admlogin, 'url' => ['view', 'id' => $model->admlogin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="administrador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
