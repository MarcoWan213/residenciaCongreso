<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Congreso $model */

$this->title = 'Create Congreso';
$this->params['breadcrumbs'][] = ['label' => 'Congresos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="congreso-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
