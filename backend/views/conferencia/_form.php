<?php

use app\models\Congreso;
use app\models\TipoPonencia;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use dosamigos\tinymce\TinyMce;
use kartik\time\TimePicker;
use yii\helpers\ArrayHelper;



/** @var yii\web\View $this */
/** @var app\models\Conferencia $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="conferencia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_ponente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hora')->widget(TimePicker::classname(), []) ?>        
    

    <?= $form->field($model, 'fecha')->widget(
        DatePicker::className(),
        [
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'yearRange' => '-115:+10',
                'changeYear' => true
            ]
        ]
    ) ?>

    <?= $form->field($model, 'horario')->widget(TimePicker::classname(), []) ?>        

    <?= $form->field($model, 'lugar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'idCongreso')->dropDownList( ArrayHelper::map(Congreso::find()->all(),'idCongreso','nombre')) ?>

    <?= $form->field($model, 'id_tipo')->dropDownList( ArrayHelper::map(TipoPonencia::find()->all(),'id_tipo','tipo')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
