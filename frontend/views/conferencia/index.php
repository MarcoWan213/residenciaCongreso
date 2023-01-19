<?php

use app\models\Conferencia;
use app\models\Congreso;
use app\models\TipoPonencia;

/** @var yii\web\View $this */
/** @var app\models\ConferenciaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Conferencias';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    body {
        text-align: center;
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }


    a {
        color: #fff;
    }

    .center {
        text-align: center;
    }

    .container {
        width: 95%;
        max-width: 1220px;
        margin: 0 auto;
    }

    .episode {
        display: grid;
        grid-template-columns: 1fr 3fr;
        position: relative;
    }

    .episode__number {
        font-size: 8vw;
        font-weight: 600;
        padding: 10px 0;
        position: sticky;
        top: 0;
        text-align: center;
        height: calc(10vw + 20px);
        transition: all 0.2s ease-in;
    }

    .episode__content {
        border-top: 2px solid #fff;
        display: grid;
        grid-template-columns: 1fr 4fr;
        grid-gap: 10px;
        padding: 15px 0;
    }

    .episode__content .title {
        font-weight: 600
    }

    .episode__content .story {
        line-height: 26px;
    }

    @media (max-width: 600px) {
        .episode__content {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 576px) {
        .episode__content .story {
            font-size: 15px;
        }
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
            <h2> CONFERENCIAS MAGISTRALES </h2>
        </div>
        <div class="col-sm-8 p-3 bg-transparent text-dark rounded border border-primary">
            <p> Durante el Congreso Regional Universitario contaremos con una
                serie de conferencias magistrales, te compartimos la información de cada una de ellas, y los ponentes que dictarán cada una de ellas. </p>
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
            $contador = 1;
            $ciclos = Congreso::find()->where(['publicado' => '1'])->all();
            foreach ($ciclos as $ciclo) {
                $id =  $ciclo->idCongreso; //atributos
                $talleres = Conferencia::find()->where(['idCongreso' => $ciclo->idCongreso])->groupBy(['fecha'])-> all();
                usort($talleres, fn ($a, $b) => $a['hora'] <=> $b['hora']);
                usort($talleres, fn ($a, $b) => $a['fecha'] <=> $b['fecha']);
                foreach ($talleres as $taller) {
                    echo "$taller->fecha";
                    /* if ($taller->fecha != next($taller)->fecha) {                
                        echo "<h1 class=center>$taller->fecha</h1> ";
                    } */
                     
                    /* $tipos = TipoPonencia::find()->where(['id_tipo' => $ciclo->id_tipo])->all();
                    foreach ($tipos as $tipo) {
                        echo "<h1 class=center>$tipo->id_tipo</h1>";
                    } */
                    echo "                     
                    <body>
                    <div class=container>
                    <h1 class=center>$taller->nombre</h1>                    
                    <article class=episode>
                        <div class=episode__number>$contador</div>
                        <div class=episode__content>
                        <div class=title>$taller->nombre_ponente</div>
                        <div class=story>                            
                            <p>Fecha : $taller->fecha.</p>
                            <p>De: $taller->hora a: $taller->horario aproximadamente</p>
                            <p>Ubicacion : $taller->lugar.</p>
                            <p>Enlace : $taller->link . </p>
                        </div>
                        </div>
                    </article>        
                    </div>  
                    </body>

                    ";
                    $contador = $contador + 1;
                }
            }
            ?>
        </div>
    </div>


</div>