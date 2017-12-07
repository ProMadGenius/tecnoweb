<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Administrador */

$this->title = $model->admlogin;
$this->params['breadcrumbs'][] = ['label' => 'Administradors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="administrador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->admlogin], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->admlogin], [
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
            'admlogin',
            'admpassword',
            'admpadre',
            'admfechinicial',
            'admfechafinal',
            'grupocod',
            'admest',
            'ustcod',
        ],
    ]) ?>

</div>
