<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Persona */

$this->title = $model->usrcod;
$this->params['breadcrumbs'][] = ['label' => 'Personas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->usrcod], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->usrcod], [
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
            'usrcod',
            'usrpassword',
            'usrnom',
            'usrapp',
            'usrapm',
            'usrtelf',
            'usremail:email',
            'usrdir',
            'usrfechanac',
            'usrci',
            'usrprof',
            'usrfechainicio',
            'usrfechafin',
            'usrest',
            'grupcod',
            'admlogin',
            'tipousuario_id',
        ],
    ]) ?>

</div>
