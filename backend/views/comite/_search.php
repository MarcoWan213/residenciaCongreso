<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ComiteSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="comite-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_com_org') ?>

    <?= $form->field($model, 'nombre_comite') ?>

    <?= $form->field($model, 'objetivo') ?>

    <?= $form->field($model, 'descipcion') ?>

    <?= $form->field($model, 'vigencia_anios') ?>

    <?php // echo $form->field($model, 'idCongreso') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
