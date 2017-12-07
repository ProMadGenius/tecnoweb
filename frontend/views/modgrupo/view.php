<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Modgrupo */

$this->title = $model->grupcod;
$this->params['breadcrumbs'][] = ['label' => 'Modgrupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modgrupo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'grupcod' => $model->grupcod, 'modcod' => $model->modcod], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'grupcod' => $model->grupcod, 'modcod' => $model->modcod], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'grupcod',
            'modcod',
            'modgrupfechinstall',
        ],
    ]) ?>

</div>
