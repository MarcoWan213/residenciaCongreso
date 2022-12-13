<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CalendarioActividad $model */

$this->title = 'Update Calendario Actividad: ' . $model->id_evento;
$this->params['breadcrumbs'][] = ['label' => 'Calendario Actividads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_evento, 'url' => ['view', 'id_evento' => $model->id_evento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="calendario-actividad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
