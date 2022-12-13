<?php

use app\models\MiembroComite;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\MiembroComiteSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Miembro Comites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miembro-comite-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Miembro Comite', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_com_org',
            'id_miembro',
            'fecha_alta',
            'fecha_ultima_renovacion',
            'fecha_baja',
            //'observacion:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MiembroComite $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_com_org' => $model->id_com_org, 'id_miembro' => $model->id_miembro]);
                 }
            ],
        ],
    ]); ?>


</div>
