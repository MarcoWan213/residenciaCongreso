<?php

use app\models\Congreso as ModelsCongreso;
use dosamigos\tinymce\TinyMce;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;

/** @var yii\web\View $this */
/** @var app\models\Comite $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="comite-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_comite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'objetivo')->widget(TinyMce::className(), [
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

    <?= $form->field($model, 'vigencia_anios')->textInput() ?>
    
    <?= $form->field($model, 'idCongreso')->dropDownList( ArrayHelper::map(ModelsCongreso::find()->all(),'idCongreso','nombre')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
