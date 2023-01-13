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
    <div class="row cabeza">
        <div class="col-sm-4 p-3 bg-transparent rounded border border-primary">
            <h2 class="cabezera"> TALLERES </h2>
        </div>
        <div class="col-sm-8 p-3 bg-transparent rounded border border-primary">
            <p class="cabeza"> En esta seccion podemos encontrar los diversos talleres que seran impartidos durante este congreso. </p>
        </div>
    </div>
    <div class="row">
        <div>
            <p></p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 p-3 bg-transparent text-dark rounded border border-primary">
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

                    echo "<br>";
                    echo "<hr class= dotted >";
                    echo "Nombre del Taller: ";
                    echo $taller->taller . "<br>";                
                    echo "<hr class= dotted >";
                    echo "<br>";
                    echo $taller->descipcion_taller;
                    echo "Instructor del Taller: ";
                    echo $taller->instructror . "<br>";
                    echo "Fecha de inicio: ";
                    echo $taller->fecha_inicio . "<br>";
                    echo "Fecha de fin: ";
                    echo $taller->fecha_fin . "<br>";
                    echo "Total de horas: ";
                    echo $taller->horas . "<br>";
                    echo "<br>";
                    echo "<hr class= solid>";
                    echo "<br>";
                }
            }
            ?>
        </div>
    </div>

</div>