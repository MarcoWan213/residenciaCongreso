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
    <div class="row cabeza">
        <div class="col-sm-5 p-2 text-dark rounded border border-primary">
            <h2 class="cabezera"> COLABORADORES </h2>
        </div>
        <div class="col-sm-7 p-3 bg-transparent text-dark rounded border border-primary">
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
            <p style="text-align: center;"><?= Colaborador::imprimirElemento() ?> </p>
        </div>
    </div>

</div>

