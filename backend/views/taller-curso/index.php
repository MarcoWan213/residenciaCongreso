<?php

use app\models\TallerCurso;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TallerCursoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Taller Cursos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taller-curso-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Taller Curso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_tall_curs',
            'taller',
            'descipcion_taller:html',
            'instructror',
            'cvu_instructor:ntext',
            //'idCongreso',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TallerCurso $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_tall_curs' => $model->id_tall_curs]);
                 }
            ],
        ],
    ]); ?>


</div>
