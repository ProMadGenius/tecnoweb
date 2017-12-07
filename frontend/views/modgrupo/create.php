<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Modgrupo */

$this->title = 'Create Modgrupo';
$this->params['breadcrumbs'][] = ['label' => 'Modgrupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modgrupo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
