<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Modgrupo */

$this->title = 'Update Modgrupo: ' . $model->grupcod;
$this->params['breadcrumbs'][] = ['label' => 'Modgrupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->grupcod, 'url' => ['view', 'grupcod' => $model->grupcod, 'modcod' => $model->modcod]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="modgrupo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
