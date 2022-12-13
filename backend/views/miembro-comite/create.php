<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MiembroComite $model */

$this->title = 'Create Miembro Comite';
$this->params['breadcrumbs'][] = ['label' => 'Miembro Comites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miembro-comite-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
