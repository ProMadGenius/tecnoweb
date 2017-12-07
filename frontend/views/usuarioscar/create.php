<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Usuarioscar */

$this->title = 'Create Usuarioscar';
$this->params['breadcrumbs'][] = ['label' => 'Usuarioscars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuarioscar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
