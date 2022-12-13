<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TallerCursoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="taller-curso-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tall_curs') ?>

    <?= $form->field($model, 'taller') ?>

    <?= $form->field($model, 'descipcion_taller') ?>

    <?= $form->field($model, 'instructror') ?>

    <?= $form->field($model, 'cvu_instructor') ?>

    <?php // echo $form->field($model, 'idCongreso') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
