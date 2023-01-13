<?php

use app\models\CalendarioActividad;
use app\models\Congreso;
use app\models\TipoPonencia;

/** @var yii\web\View $this */
/** @var app\models\CalendarioActividadSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Calendario Actividades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <div class="row cabeza">
        <div class="col-sm-4 p-3 bg-transparent rounded border border-primary">
            <h2 class="cabezera"> CALENDARIO </h2>
        </div>
        <div class="col-sm-8 p-3 bg-transparent rounded border border-primary">
            <p class="cabeza"> A continuación te compartimos el calendario de las actividades más importantes del congreso. </p>
        </div>
    </div>
    <div class="row">
        <div>
            <p></p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 p-3 bg-transparent text-dark rounded border border-primary">
            <p><?= CalendarioActividad::imprimirElemento() ?> </p>
        </div>
    </div>
    <p></p>
</div>