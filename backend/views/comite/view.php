<?php

use app\models\Congreso;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Comite $model */

$this->title = $model->id_com_org;
$this->params['breadcrumbs'][] = ['label' => 'Comites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="comite-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_com_org' => $model->id_com_org], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_com_org' => $model->id_com_org], [
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
            'id_com_org',
            'nombre_comite',
            'objetivo:ntext',
            'descipcion:ntext',
            'vigencia_anios',
            //'idCongreso',
            [   'attribute'=>'idCongreso',
                'value'=>Congreso::findOne($model->idCongreso)->nombre
            ],
        ],
    ]) ?>

</div>
