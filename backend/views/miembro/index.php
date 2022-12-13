<?php

use app\models\Miembro;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\MiembroSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Miembros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miembro-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Miembro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_miembro',
            'nombre',
            'apellidos',
            'tipo',
            'institucion',
            //'telefono',
            //'email:email',
            //'vigente',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Miembro $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_miembro' => $model->id_miembro]);
                }
            ],
        ],
    ]); ?>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Comites</h2>

                <p>Miembros asociados.</p>

                <a class="btn btn-outline-secondary" href="http://localhost/residenciaCongreso/backend/web/index.php?r=comite">
                    Volver a los Comites &raquo;</a></p>
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


    </div>