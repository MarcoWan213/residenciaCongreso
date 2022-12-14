<?php

use app\models\Congreso;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CongresoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Congresos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="congreso-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Congreso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idCongreso',
            'nombre',
            'bienvenida:html',
            'nota:html',
            'objetivos:html',
            //'fech_creacion',
            //'fech_inicio',
            //'fech_fin',
            //'txt_convocatoria:ntext',
            //'link_convocatoria',
            //'txt_programa_general:ntext',
            //'link_programa_genral',
            //'txt_registro_ponencia:ntext',
            //'link_registro_ponencia',
            //'modalidad',
            //'img_easychair',
            //'autorizado',
            //'publicado',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Congreso $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idCongreso' => $model->idCongreso]);
                }
            ],
        ],
    ]); ?>
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                
            </div>
            <div class="col-lg-4">
                <h2>Conferencias</h2>

                <p>Pagina princial para agregar, cambiar o eliminar conferencias..</p>

                <p><a class="btn btn-outline-secondary" href="http://localhost/residenciaCongreso/backend/web/index.php?r=conferencia">
                        Generar o modificar &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Comite</h2>

                <p>Dicho apartado nos facilita la creacion de un grupo-comite con diferentes funciones, las cuales se son espesificadas
                    en este mismo.</p>

                <p><a class="btn btn-outline-secondary" href="http://localhost/residenciaCongreso/backend/web/index.php?r=comite">
                        Comites Organizadores &raquo;</a></p>
            </div>
        </div>

    </div>
    


</div>