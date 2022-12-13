<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TipoPonencia $model */

$this->title = 'Create Tipo Ponencia';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Ponencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-ponencia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
