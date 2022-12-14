<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Colaborador $model */

$this->title = 'Update Colaborador: ' . $model->id_colavorador;
$this->params['breadcrumbs'][] = ['label' => 'Colaboradors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_colavorador, 'url' => ['view', 'id_colavorador' => $model->id_colavorador]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="colaborador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
