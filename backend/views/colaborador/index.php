<?php

use app\models\Colaborador;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ColaboradorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Colaboradores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="colaborador-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Colaborador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_colavorador',
            'nombre',
            'enlace',
            'link',
            'telefono',
            //'logotipo',
            //'idCongreso',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Colaborador $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_colavorador' => $model->id_colavorador]);
                 }
            ],
        ],
    ]); ?>


</div>
