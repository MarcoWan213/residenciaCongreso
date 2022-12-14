<?php

use app\models\Congreso;
use app\models\Miembro;
use dosamigos\tinymce\TinyMce;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CalendarioActividad $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="calendario-actividad-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha_inicio')->widget(
        DatePicker::className(),
        [
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'yearRange' => '-115:+10',
                'changeYear' => true
            ]
        ]
    ) ?>

    <?= $form->field($model, 'fecha_fin')->widget(
        DatePicker::className(),
        [
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'yearRange' => '-115:+10',
                'changeYear' => true
            ]
        ]
    ) ?>


    <?= $form->field($model, 'descipcion')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
        'language' => 'es',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ])
    ?>

    <?= $form->field($model, 'responsable')->dropDownList(ArrayHelper::map(Miembro::find()->all(), 'id_miembro', 'nombre')) ?>
    <?= $form->field($model, 'idCongreso')->dropDownList(ArrayHelper::map(Congreso::find()->all(), 'idCongreso', 'nombre')) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>