<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Miembro $model */

$this->title = 'Update Miembro: ' . $model->id_miembro;
$this->params['breadcrumbs'][] = ['label' => 'Miembros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_miembro, 'url' => ['view', 'id_miembro' => $model->id_miembro]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="miembro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
