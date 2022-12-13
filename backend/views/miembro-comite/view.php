<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\MiembroComite $model */

$this->title = $model->id_com_org;
$this->params['breadcrumbs'][] = ['label' => 'Miembro Comites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="miembro-comite-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_com_org' => $model->id_com_org, 'id_miembro' => $model->id_miembro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_com_org' => $model->id_com_org, 'id_miembro' => $model->id_miembro], [
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
            'id_miembro',
            'fecha_alta',
            'fecha_ultima_renovacion',
            'fecha_baja',
            'observacion:ntext',
        ],
    ]) ?>

</div>
