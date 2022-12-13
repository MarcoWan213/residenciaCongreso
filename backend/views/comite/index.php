<?php

use app\models\Comite;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ComiteSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Comites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comite-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Comite', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_com_org',
            'nombre_comite',
            'objetivo:html',
            'descipcion:html',
            'vigencia_anios',
            //'idCongreso',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Comite $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_com_org' => $model->id_com_org]);
                }
            ],
        ],
    ]); ?>
    <div class="body-content">

        <div class="row">

            <div class="col-lg-4">
                <h2>Miembros</h2>

                <p>Miembros asociados.</p>

                <a class="btn btn-outline-secondary" href="http://localhost/residenciaCongreso/backend/web/index.php?r=miembro">
                    Miembros del comite &raquo;</a></p>
            </div>
        </div>
        <div class="col-lg-4">

        </div>
        <div class="col-lg-4">
            <h2>Congreso</h2>

            <p>Regresar a "Congresos"..</p>

            <p><a class="btn btn-outline-secondary" href="http://localhost/residenciaCongreso/backend/web/index.php?r=congreso">
                    Volver &raquo;</a></p>
        </div>

    </div>