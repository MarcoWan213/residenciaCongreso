<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ColaboradorSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="colaborador-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_colavorador') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'enlace') ?>

    <?= $form->field($model, 'link') ?>

    <?= $form->field($model, 'telefono') ?>
    
    <?= $form->field($model, 'logotipo') ?>

    <?php // echo $form->field($model, 'idCongreso') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
