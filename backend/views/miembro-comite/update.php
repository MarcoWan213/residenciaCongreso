<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MiembroComite $model */

$this->title = 'Update Miembro Comite: ' . $model->id_com_org;
$this->params['breadcrumbs'][] = ['label' => 'Miembro Comites', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_com_org, 'url' => ['view', 'id_com_org' => $model->id_com_org, 'id_miembro' => $model->id_miembro]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="miembro-comite-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
