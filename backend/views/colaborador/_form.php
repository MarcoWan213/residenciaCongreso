<?php

use app\models\Congreso;
use dosamigos\tinymce\TinyMce;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Colaborador $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="colaborador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enlace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>
    <br>
    <?php echo "Se recomienda redimencionar las imagenes en este campo a 160px x 160px" ?>
    <?= $form->field($model, 'logotipo')->widget(TinyMce::className(), [
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

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
