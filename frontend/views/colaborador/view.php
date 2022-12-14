6<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Colaborador $model */

$this->title = $model->id_colavorador;
$this->params['breadcrumbs'][] = ['label' => 'Colaboradors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="colaborador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_colavorador' => $model->id_colavorador], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_colavorador' => $model->id_colavorador], [
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
            'id_colavorador',
            'nombre',
            'enlace',
            'link',
            'telefono',
            [
                'attribute' => 'logotipo',
                'format' => 'raw',
                'value' => function ($data) {
                    if (!is_null($data->logotipo)) {
                        return Html::img(
                            Yii::getAlias('@imageurl/') . $data->logotipo,
                            ['style' => 'width:120px; height:auto; display: block; margin:auto']
                        );
                    } else {
                        return 'vacio';
                    }
                }
            ],
            'idCongreso',
        ],
    ]) ?>

</div>