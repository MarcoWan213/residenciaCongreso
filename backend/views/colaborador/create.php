<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Colaborador $model */

$this->title = 'Crear Nuevo Colaborador';
$this->params['breadcrumbs'][] = ['label' => 'Colaborador', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="colaborador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
