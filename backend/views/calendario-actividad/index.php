<?php

use app\models\CalendarioActividad;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CalendarioActividadSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Calendario de Actividades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calendario-actividad-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Actividad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_evento',
            'descipcion:html',
            'fecha_inicio',
            'fecha_fin',
            //'responsable',
            //'idCongreso',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CalendarioActividad $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_evento' => $model->id_evento]);
                 }
            ],
        ],
    ]); ?>


</div>
