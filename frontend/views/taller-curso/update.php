<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TallerCurso $model */

$this->title = 'Update Taller Curso: ' . $model->id_tall_curs;
$this->params['breadcrumbs'][] = ['label' => 'Taller Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tall_curs, 'url' => ['view', 'id_tall_curs' => $model->id_tall_curs]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="taller-curso-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
