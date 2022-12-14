<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Conferencia $model */

$this->title = 'Update Conferencia: ' . $model->id_mag;
$this->params['breadcrumbs'][] = ['label' => 'Conferencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_mag, 'url' => ['view', 'id_mag' => $model->id_mag]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="conferencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
