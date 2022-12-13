<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MiembroComiteSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="miembro-comite-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_com_org') ?>

    <?= $form->field($model, 'id_miembro') ?>

    <?= $form->field($model, 'fecha_alta') ?>

    <?= $form->field($model, 'fecha_ultima_renovacion') ?>

    <?= $form->field($model, 'fecha_baja') ?>

    <?php // echo $form->field($model, 'observacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
