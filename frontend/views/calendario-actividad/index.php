<?php

use app\models\CalendarioActividad;
use app\models\Congreso;


/** @var yii\web\View $this */
/** @var app\models\CalendarioActividadSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Calendario Actividades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <!-- Titulo General -->
    <div class="row">
        <div class="col-sm-7 p-3 bg-primary text-white">
            <h1><?= Congreso::imprimirDato('nombre'); ?> </h1>
        </div>
        <div class="col-sm-4 p-3 bg-dark text-white">
            <p style="text-align: center;"><?= Congreso::imprimirDato('nota'); ?> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 p-3 bg-primary text-white">
            <h2> CALENDARIO DE ACTIVIDADES </h2>
        </div>
        <div class="col-sm-8 p-3 bg-dark text-white">
            <p style="text-align: center;"> A continuación te compartimos el calendario de las actividades más importantes del congreso. </p>
        </div>
    </div>
    <div class="row">        
        <div>
            <p></p>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-2 p-3">
            <p style="text-align: center;">Fecha Inicio</p>
        </div>
        <div class="col-sm-9 p-3 bg-dark text-white">            
            <p style="text-align: center;"><?= CalendarioActividad::imprimirDato('fecha_inicio'); ?> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 p-3">
            <p style="text-align: center;">Fecha Fin</p>
        </div>
        <div class="col-sm-9 p-3 bg-dark text-white">            
            <p style="text-align: center;"><?= CalendarioActividad::imprimirDato('fecha_fin'); ?> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 p-3">
            <p style="text-align: center;">Descipcion</p>
        </div>
        <div class="col-sm-9 p-3 bg-dark text-white">            
            <p style="text-align: center;"><?= CalendarioActividad::imprimirDato('descipcion'); ?> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 p-3">
            <p style="text-align: center;">Responsable</p>
        </div>
        <div class="col-sm-9 p-3 bg-dark text-white">            
            <p style="text-align: center;"><?= CalendarioActividad::imprimirDato('responsable'); ?> </p>
        </div>
    </div>

</div>
