<?php

use app\models\Congreso;
use app\models\TipoPonencia;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Conferencia $model */

$this->title = $model->id_mag;
$this->params['breadcrumbs'][] = ['label' => 'Conferencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="conferencia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id_mag' => $model->id_mag], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id_mag' => $model->id_mag], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Crear Nueva Conferencia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_mag',
            'nombre',
            'nombre_ponente',
            'hora',
            'fecha',
            'horario',
            'lugar',
            'link',
            'descipcion:html',            
            [   'attribute'=>'idCongreso',
                'value'=>Congreso::findOne($model->idCongreso)->nombre
            ],            
            [   'attribute'=>'id_tipo',
                'value'=>TipoPonencia::findOne($model->id_tipo)->tipo
            ],
        ],
    ]) ?>

</div>
