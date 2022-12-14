<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ConferenciaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="conferencia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_mag') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'nombre_ponente') ?>

    <?= $form->field($model, 'hora') ?>

    <?= $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'horario') ?>

    <?php // echo $form->field($model, 'lugar') ?>

    <?php // echo $form->field($model, 'link') ?>

    <?php // echo $form->field($model, 'descipcion') ?>

    <?php // echo $form->field($model, 'idCongreso') ?>

    <?php // echo $form->field($model, 'id_tipo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
