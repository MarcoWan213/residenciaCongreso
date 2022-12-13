<?php

use app\models\Conferencia;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ConferenciaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Conferencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conferencia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Conferencia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_mag',
            //'nombre',
            'nombre_ponente',
            'hora',
            'fecha',
            //'horario',
            //'lugar',
            //'link',
            //'descipcion:ntext',
            //'idCongreso',
            //'id_tipo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Conferencia $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_mag' => $model->id_mag]);
                }
            ],
        ],
    ]); ?>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">
                <h2>Congreso</h2>

                <p>Regresar a "Congresos"..</p>

                <p><a class="btn btn-outline-secondary" href="http://localhost/residenciaCongreso/backend/web/index.php?r=congreso">
                        Volver &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Categorias</h2>

                <p>Tipos y clases de conferencias.</p>

                <p><a class="btn btn-outline-secondary" href="http://localhost/residenciaCongreso/backend/web/index.php?r=tipo-ponencia">
                        Tipo de conferencia &raquo;</a></p>
            </div>
        </div>

    </div>

</div>