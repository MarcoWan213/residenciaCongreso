<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TallerCurso $model */

$this->title = $model->id_tall_curs;
$this->params['breadcrumbs'][] = ['label' => 'Taller Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="taller-curso-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_tall_curs' => $model->id_tall_curs], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_tall_curs' => $model->id_tall_curs], [
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
            'id_tall_curs',
            'taller',
            'descipcion_taller:html',
            'instructror',
            'cvu_instructor:ntext',
            'idCongreso',
        ],
    ]) ?>

</div>
