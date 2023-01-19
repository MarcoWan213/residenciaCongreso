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
<style>
    body {        
        text-align: center;
    }

    .card-1 {
        border-radius: 2px;
        display: inline-block;
        height: 350px;
        margin: 1rem;
        position: relative;
        width: 300px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
    }

    .card-1:hover {
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

    h3 {
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
    }

    h3 span {
        display: block;
        font-size: 0.5em;
        line-height: 1.3;
    }

    h3 em {
        font-style: normal;
        font-weight: 600;
    }

    .eight h3 {
        text-align: center;

        text-transform: uppercase;
        font-size: 26px;
        letter-spacing: 1px;

        display: grid;
        grid-template-columns: 1fr auto 1fr;
        grid-template-rows: 16px 0;
        grid-gap: 22px;
    }

    .eight h3:after,
    .eight h3:before {
        content: " ";
        display: block;
        border-bottom: 2px solid #ccc;
        background-color: #f8f8f8;
    }
</style>
<div>
    <div class="row">
        <div class="col-sm-5 p-2">
            <h2> COLABORADORES </h2>
        </div>
        <div class="col-sm-7 p-3 bg-transparent text-dark rounded border border-primary">
            <p> A continuación te compartimos el calendario de las actividades más importantes del congreso. </p>
        </div>
    </div>
    <div class="row">
        <div>
            <p></p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 p-3 bg-transparent text-dark rounded border border-primary">
            <?php
            $ciclos = Congreso::find()->where(['publicado' => '1'])->all();
            foreach ($ciclos as $ciclo) {
                $id =  $ciclo->idCongreso; //atributos
                $talleres = Colaborador::find()->where(['idCongreso' => $ciclo->idCongreso])->all();
                foreach ($talleres as $taller) {

                    echo "
                    <div class=card-1>                    
                    <div class=eight>
                        <h3>$taller->nombre</h3>
                    </div>                  
                    <p>Telefono: $taller->telefono</p>
                    $taller->logotipo <br>                    
                    <a href=$taller->link>Conocelo</a>
                    </div>
                    ";
                }
            }
            ?>
        </div>
    </div>

</div>