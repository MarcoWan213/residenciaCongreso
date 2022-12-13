<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TipoPonencia $model */

$this->title = 'Update Tipo Ponencia: ' . $model->id_tipo;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Ponencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tipo, 'url' => ['view', 'id_tipo' => $model->id_tipo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-ponencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
