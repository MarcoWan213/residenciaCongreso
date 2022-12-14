<?php

use app\models\Colaborador;
use app\models\Congreso;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ColaboradorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Colaboradores';
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
            <p style="text-align: center;">Nombre</p>
        </div>
        <div class="col-sm-9 p-3 bg-dark text-white">            
            <p style="text-align: center;"><?= Colaborador::imprimirDato('nombre'); ?> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 p-3">
            <p style="text-align: center;">Link</p>
        </div>
        <div class="col-sm-9 p-3 bg-dark text-white">            
            <p style="text-align: center;"><?= Colaborador::imprimirDato('link'); ?> </p>
        </div>
    </div>
    <div class="row">        
        <div class="col-sm-11 p-3 bg-dark text-white">            
            <p style="text-align: center;"><?= Colaborador::imprimirDato('logotipo'); ?> </p>
        </div>
    </div>    

</div>

