<?php
/**
 * Created by PhpStorm.
 * User: Izzy
 * Date: 8/12/2017
 * Time: 16:05
 */

use yii\helpers\Url;

?>

<br>
<a href="<?= Url::toRoute("encuesta/index")?>">Ir al Indice</a>



<br>
<br>

<h1>Lista de Encuestas</h1>
<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Facultad</th>
        <th>Fecha Inicio</th>
        <th>Fecha Final</th>

    </tr>

    <?php foreach ($model as $row): ?>
    <tr>
        <td><?= $row->id ?></td>
        <td><?= $row->titulo ?></td>
        <td><?= $row->nombrefacultad ?></td>
        <td><?= $row->fechainicio ?></td>
        <td><?= $row->fechafin ?></td>
    </tr>
    <?php endforeach ?>
</table>