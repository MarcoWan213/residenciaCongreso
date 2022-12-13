<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MiembroComite $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="miembro-comite-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_com_org')->textInput() ?>

    <?= $form->field($model, 'id_miembro')->textInput() ?>

    <?= $form->field($model, 'fecha_alta')->textInput() ?>

    <?= $form->field($model, 'fecha_ultima_renovacion')->textInput() ?>

    <?= $form->field($model, 'fecha_baja')->textInput() ?>

    <?= $form->field($model, 'observacion')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
