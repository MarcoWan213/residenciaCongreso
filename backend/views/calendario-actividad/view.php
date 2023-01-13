<?php

use app\models\Congreso;
use app\models\Miembro;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\CalendarioActividad $model */

$this->title = $model->id_evento;
$this->params['breadcrumbs'][] = ['label' => 'Calendario Actividads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="calendario-actividad-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id_evento' => $model->id_evento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id_evento' => $model->id_evento], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_evento',
            'fecha_inicio',
            'fecha_fin',
            'descipcion:html',
            'responsable',
            /* [
                'attribute' => 'responsable',
                'value' => Miembro::findOne($model->id_miembro)->nombre
            ], */
            [
                'attribute' => 'idCongreso',
                'value' => Congreso::findOne($model->idCongreso)->nombre
            ],
        ],
    ]) ?>

</div>