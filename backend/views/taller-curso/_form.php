<?php

use app\models\Congreso;
use dosamigos\tinymce\TinyMce;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TallerCurso $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="taller-curso-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'taller')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descipcion_taller')->widget(TinyMce::className(), [
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

    <?= $form->field($model, 'horas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instructror')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cvu_instructor')->textarea(['rows' => 6]) ?><!-- Subir archivo tipo pdf -->

    <?= $form->field($model, 'idCongreso')->dropDownList(ArrayHelper::map(Congreso::find()->all(), 'idCongreso', 'nombre')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>