<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CalendarioActividad $model */

$this->title = 'Create Calendario Actividad';
$this->params['breadcrumbs'][] = ['label' => 'Calendario Actividads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calendario-actividad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
