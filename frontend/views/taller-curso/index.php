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

<style>
    body {
        text-align: center;
    }

    h3.caja {
        border-top: 2px solid #1375b0;
        width: 100%;
        float: none;
        display: flex;
        inline-size: auto;
        font-size: 1.5em;
    }

    h3.cTitulo {
        /* border: 2px solid #1375b0;
        width: 100%;
        float: none;
        display: flex;
        inline-size: auto; */
        border-top: 2px solid #1375b0;
        font-size: calc(2em);
        font-weight: 3em;
        letter-spacing: .01em;
        /* padding: 10rem 0 0 4.5rem; */
        text-shadow: .022em .022em .022em #111;
        color: #111;
        text-align: center;
        box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
    }

    h3.caja::before {
        content: "";
        display: block;
        position: relative;
        top: 0px;
        left: 0;
        font-size: 36px;
        padding: 25px 35px;
        background-image: linear-gradient(to top, #429ce9 0, #1375b0 100%);
        color: #fff;
        float: left;
        line-height: 0;
        font-weight: 600;
        clip-path: polygon(0 -1%, 100% -1%, calc(100% - 35px) 100%, 0 100%);
    }

    /* h2 {
        position: relative;
        padding: 0;
        margin: 0;
        font-family: "Raleway", sans-serif;
        font-weight: 300;
        font-size: 40px;
        color: #080808;
        -webkit-transition: all 0.4s ease 0s;
        -o-transition: all 0.4s ease 0s;
        transition: all 0.4s ease 0s;
    } */

    h2 span {
        display: block;
        font-size: 0.5em;
        line-height: 1.3;
    }

    h2 em {
        font-style: normal;
        font-weight: 600;
    }

    .eight h2 {
        text-align: center;

        text-transform: uppercase;
        font-size: 26px;
        letter-spacing: 1px;

        display: grid;
        grid-template-columns: 1fr auto 1fr;
        grid-template-rows: 16px 0;
        grid-gap: 22px;
    }

    .eight h2:after,
    .eight h2:before {
        content: " ";
        display: block;
        border-bottom: 2px solid #ccc;
        background-color: #f8f8f8;
    }

    .ten h2 {
        font-size: 26px;
        font-weight: 500;
        text-transform: uppercase;
    }

    .ten h2:before {
        background-color: #c50000;
        border-radius: 0.25rem;
        content: '';
        display: block;
        height: 0.25rem;
        width: 84px;
        margin-bottom: 1rem;
    }

    .three h2 {
        font-size: 28px;
        font-weight: 500;
        letter-spacing: 0;
        line-height: 1.5em;
        padding-bottom: 15px;
        position: relative;
    }

    .three h2:before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 5px;
        width: 55px;
        background-color: #111;
    }

    .three h2:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 2px;
        height: 1px;
        width: 95%;
        max-width: 305px;
        background-color: #333;
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
            <h2> TALLERES </h2>
        </div>
        <div class="col-sm-8 p-3 bg-transparent rounded border border-primary">
            <p> En esta seccion podemos encontrar los diversos talleres que seran impartidos durante este congreso. </p>
        </div>
    </div>
    <div class="row">
        <div>
            <p></p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 p-3 rounded border border-primary">
            <!-- <p><?= TallerCurso::imprimirElemento() ?> </p>             -->
            <?php
            $ciclos = Congreso::find()->where(['publicado' => '1'])->all();
            foreach ($ciclos as $ciclo) {
                /*   echo  $ciclo->nombre; //atributos
                echo  $ciclo->bienvenida; //atributos */
                //echo  $ciclo->talleresCursos; //atributos

                $id =  $ciclo->idCongreso; //atributos
                $talleres = TallerCurso::find()->where(['idCongreso' => $ciclo->idCongreso])->all();
                foreach ($talleres as $taller) {

                    echo "                    
                    <h3 class=cTitulo> Nombre del Taller: $taller->taller </h3>                                     
                    $taller->descipcion_taller
                    <h3 class=caja> Instructor del Taller: $taller->instructror
                    <br> Fecha de inicio: $taller->fecha_inicio
                    <br> Fecha de fin: $taller->fecha_fin
                    <br> Total de horas: $taller->horas </h3>  
                    <br>
                    <br>                 
                    ";
                }
            }
            ?>
        </div>
    </div>

</div>