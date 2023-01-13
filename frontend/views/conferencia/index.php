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
    <div class="row cabeza">
        <div class="col-sm-4 p-3 text-dark rounded border border-primary">
            <h2 class="cabezera"> CONFERENCIAS MAGISTRALES </h2>
        </div>
        <div class="col-sm-8 p-3 bg-transparent text-dark rounded border border-primary">
            <p class="cabeza"> Durante el Congreso Regional Universitario contaremos con una
                serie de conferencias magistrales, te compartimos la información de cada una de ellas, y los ponentes que dictarán cada una de ellas. </p>
        </div>
    </div>
    <div class="row">        
        <div>
            <p></p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 p-3 bg-transparent text-dark rounded border border-primary">            
            <p style="text-align: center;"><?= Conferencia::imprimirElemento() ?> </p>
        </div>
    </div>
    

</div>