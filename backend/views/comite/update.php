<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Comite $model */

$this->title = 'Update Comite: ' . $model->id_com_org;
$this->params['breadcrumbs'][] = ['label' => 'Comites', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_com_org, 'url' => ['view', 'id_com_org' => $model->id_com_org]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comite-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
