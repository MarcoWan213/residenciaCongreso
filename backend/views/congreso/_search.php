<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CongresoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="congreso-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idCongreso') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'bienvenida') ?>

    <?= $form->field($model, 'nota') ?>

    <?= $form->field($model, 'objetivos') ?>

    <?php // echo $form->field($model, 'fech_creacion') ?>

    <?php // echo $form->field($model, 'fech_inicio') ?>

    <?php // echo $form->field($model, 'fech_fin') ?>

    <?php // echo $form->field($model, 'txt_convocatoria') ?>

    <?php // echo $form->field($model, 'link_convocatoria') ?>

    <?php // echo $form->field($model, 'txt_programa_general') ?>

    <?php // echo $form->field($model, 'link_programa_genral') ?>

    <?php // echo $form->field($model, 'txt_registro_ponencia') ?>

    <?php // echo $form->field($model, 'link_registro_ponencia') ?>

    <?php // echo $form->field($model, 'modalidad') ?>

    <?php // echo $form->field($model, 'img_easychair') ?>

    <?php // echo $form->field($model, 'autorizado') ?>

    <?php // echo $form->field($model, 'publicado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
