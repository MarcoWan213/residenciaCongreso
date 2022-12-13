<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Congreso $model */

$this->title = $model->idCongreso;
$this->params['breadcrumbs'][] = ['label' => 'Congresos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="congreso-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idCongreso' => $model->idCongreso], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idCongreso' => $model->idCongreso], [
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
            'idCongreso',
            'nombre',
            'bienvenida:ntext',
            'nota:ntext',
            'objetivos',
            'fech_creacion',
            'fech_inicio',
            'fech_fin',
            'txt_convocatoria:ntext',
            'link_convocatoria',
            'txt_programa_general:ntext',
            'link_programa_genral',
            'txt_registro_ponencia:ntext',
            'link_registro_ponencia',
            'modalidad',
            'img_easychair',
            'autorizado',
            'publicado',
            'estatus',
            
        ],
    ]) ?>

</div>
