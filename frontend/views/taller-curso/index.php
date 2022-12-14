<?php

use app\models\Congreso;
use app\models\TallerCurso;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TallerCursoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Taller Cursos';
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
            <p style="text-align: center;">Taller</p>
        </div>
        <div class="col-sm-9 p-3 bg-dark text-white">            
            <p style="text-align: center;"><?= TallerCurso::imprimirDato('taller'); ?> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 p-3">
            <p style="text-align: center;">Descripcion</p>
        </div>
        <div class="col-sm-9 p-3 bg-dark text-white">            
            <p style="text-align: center;"><?= TallerCurso::imprimirDato('descipcion_taller'); ?> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 p-3">
            <p style="text-align: center;">Instructor</p>
        </div>
        <div class="col-sm-9 p-3 bg-dark text-white">            
            <p style="text-align: center;"><?= TallerCurso::imprimirDato('instructror'); ?> </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 p-3">
            <p style="text-align: center;">Mas Info</p>
        </div>
        <div class="col-sm-9 p-3 bg-dark text-white">            
            <p style="text-align: center;"><?= TallerCurso::imprimirDato('cvu_instructor'); ?> </p>
        </div>
    </div>

</div>

