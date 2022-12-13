<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TallerCurso $model */

$this->title = 'Create Taller Curso';
$this->params['breadcrumbs'][] = ['label' => 'Taller Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taller-curso-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
