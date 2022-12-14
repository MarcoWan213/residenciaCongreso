<?php

use app\models\Conferencia;
use app\models\Congreso;

/** @var yii\web\View $this */
/** @var app\models\ConferenciaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Conferencias';
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
            <h2> CONFERENCIAS MAGISTRALES </h2>
        </div>
        <div class="col-sm-8 p-3 bg-dark text-white">
            <p style="text-align: center;"> Durante el Congreso Regional Universitario contaremos con una
                serie de conferencias magistrales, te compartimos la información de cada una de ellas, y los ponentes que dictarán cada una de ellas. </p>
        </div>
    </div>
    <div class="row">        
        <div>
            <p></p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 p-3">
            <p style="text-align: center;">Fecha</p>
        </div>
        <div class="col-sm-9 p-3 bg-dark text-white">            
            <p style="text-align: center;"><?= Conferencia::imprimirDato('fecha'); ?> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 p-3">
            <p style="text-align: center;">Horario inicio</p>
        </div>
        <div class="col-sm-9 p-3 bg-dark text-white">            
            <p style="text-align: center;"><?= Conferencia::imprimirDato('hora'); ?> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 p-3">
            <p style="text-align: center;">Horario fin</p>
        </div>
        <div class="col-sm-9 p-3 bg-dark text-white">            
            <p style="text-align: center;"><?= Conferencia::imprimirDato('horario'); ?> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 p-3">
            <p style="text-align: center;">Nombre</p>
        </div>
        <div class="col-sm-9 p-3 bg-dark text-white">            
            <p style="text-align: center;"><?= Conferencia::imprimirDato('nombre'); ?> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 p-3">
            <p style="text-align: center;">Ponente</p>
        </div>
        <div class="col-sm-9 p-3 bg-dark text-white">            
            <p style="text-align: center;"><?= Conferencia::imprimirDato('nombre_ponente'); ?> </p>
        </div>
    </div>

</div>