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

<style>
    body {
        text-align: center;
    }

    h3.cTitulo {
        /* border: 2px solid #1375b0;
        width: 100%;
        float: none;
        display: flex;
        inline-size: auto; */
        font-size: calc(1em);
        font-weight: 1em;
        letter-spacing: .01em;
        /* padding: 10rem 0 0 4.5rem; */
        text-shadow: .022em .022em .022em #111;
        color: #111;
        box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
        display: inline;
    }

    p.fecha {
        font-style: italic;

    }


    container {
        text-align: center;
    }

    img.icono {
        width: 8em;
    }
    p {
        font-family: 'Open Sans', sans-serif;
        font-size: 15px;
        font-weight: 400;
        line-height: 24px;
        margin: 0 0 14px;
    }
</style>
<div>
    <div class="row">
        <div class="col-sm-4 p-3">
            <h2> CALENDARIO </h2>
        </div>
        <div class="col-sm-8 p-3 bg-transparent rounded border border-primary">
            <p> A continuación te compartimos el calendario de las actividades más importantes del congreso. </p>
        </div>
    </div>
    <div class="row">
        <div>
            <p></p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 p-3 rounded border border-primary">
            <?php
            $ciclos = Congreso::find()->where(['publicado' => '1'])->all();
            foreach ($ciclos as $ciclo) {
                $id =  $ciclo->idCongreso; //atributos
                $talleres = CalendarioActividad::find()->where(['idCongreso' => $ciclo->idCongreso])->all();
                usort($talleres, fn ($a, $b) => $a['fecha_inicio'] <=> $b['fecha_inicio']);
                foreach ($talleres as $taller) {

                    echo "
                    <container>  
                    <hr class=solid>                  
                    <p class=fecha>
                    <img class=icono src=uploads\calendar.png>
                    <br>
                    A partir del dia: $taller->fecha_inicio                    
                    hasta: $taller->fecha_fin
                    </p>
                    <h3 class=cTitulo> $taller->descipcion </h3>   
                    </container>
                    ";
                }
            }
            ?>
        </div>
    </div>
    <p></p>
</div>