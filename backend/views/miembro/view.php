<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Miembro $model */

$this->title = $model->id_miembro;
$this->params['breadcrumbs'][] = ['label' => 'Miembros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="miembro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_miembro' => $model->id_miembro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_miembro' => $model->id_miembro], [
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
            'id_miembro',
            'nombre',
            'apellidos',
            'tipo',
            'institucion',
            'telefono',
            'email:email',
            'vigente',
        ],
    ]) ?>

</div>
