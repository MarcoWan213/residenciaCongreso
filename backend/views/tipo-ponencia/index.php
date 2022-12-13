<?php

use app\models\TipoPonencia;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TipoPonenciaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tipo Ponencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-ponencia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tipo Ponencia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_tipo',
            'tipo',
            'descripcion:html',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TipoPonencia $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_tipo' => $model->id_tipo]);
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

                <p>Regresar a "conferencias"..</p>

                <p><a class="btn btn-outline-secondary" href="http://localhost/residenciaCongreso/backend/web/index.php?r=conferencia">
                        Volver &raquo;</a></p>
            </div>

</div>
