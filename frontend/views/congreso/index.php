<?php

use app\models\Congreso;

/** @var yii\web\View $this */
/** @var app\models\CongresoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Congresos';
$this->params['breadcrumbs'][] = $this->title;

?>
<div>
    <div class="row">
        <div class="col-sm-7 p-3 bg-primary text-white">
            <h1><?= Congreso::imprimirDato('nombre'); ?> </h1>
        </div>
        <div class="col-sm-4 p-3 bg-dark text-white">
            <p style="text-align: center;"><?= Congreso::imprimirDato('nota'); ?> </p>
        </div>
    </div>



    <h2 style="text-align: center; background: grey;"><strong>Bienvenidos.</strong></h2>
    <p><?= Congreso::imprimirDato('bienvenida'); ?></p>
    <h2 style="text-align: center;"><strong>Congreso.</strong></h2>
    <div class="et_pb_text_inner">
        <p style="text-align: center;"><strong>Congreso Regional Universitario: Innovación y Experiencias en </strong><br><strong>Investigación en Tiempos de COVID-19</strong></p>
        <p style="text-align: justify;">Que se realizará en modalidad virtual del 17 al 31 de octubre del 2021 a través del Tecnológico Nacional de México, Campus Valladolid.</p>
    </div>
    <h2 style="text-align: center;"><strong>Objetivos.</strong></h2>
    <p> <?= Congreso::imprimirDato('objetivos'); ?> </p>
    <h2 style="text-align: center;">Consulta la convocatoria</h2>

    <p> <?= Congreso::imprimirDato('txt_convocatoria'); ?> </p>

    <h2 style="text-align: center;">Programa general</h2>
    <p> <?= Congreso::imprimirDato('txt_programa_general'); ?> </p>

    <h2 style="text-align: center;">Registro</h2>
    <p> <?= Congreso::imprimirDato('txt_registro_ponencia'); ?> </p>

</div>