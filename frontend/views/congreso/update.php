<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Congreso $model */

$this->title = 'Update Congreso: ' . $model->idCongreso;
$this->params['breadcrumbs'][] = ['label' => 'Congresos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idCongreso, 'url' => ['view', 'idCongreso' => $model->idCongreso]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="congreso-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
