<?php

/** @var \yii\web\View $this */
/** @var string $content */

use app\models\Congreso;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<style>
    nav.navbar {
        color: #fff;   
        background-color: #fff;       
    }
</style>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">


<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>


<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <!-- <img src="uploads\logoitsva.png" width="50" height="50" class="d-inline-block align-top" alt=""> //IMG ITSVA -->
        <?php
        NavBar::begin([
            'brandLabel' => Html::img('uploads\logoitsva.png', ['alt' => Yii::$app->name, 'width' => '40px']),
            /* 'brandLabel' => Yii::$app->name, */
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-md fixed-top ',
            ],
        ]);
        $menuItems = [
            ['label' => 'Congreso', 'url' => ['/site/index']],
            ['label' => 'Talleres', 'url' => ['/taller-curso/index']],
            ['label' => 'Calendario', 'url' => ['/calendario-actividad/index']],
            ['label' => 'Conferencias', 'url' => ['/conferencia/index']],
            ['label' => 'Colaboradores', 'url' => ['/colaborador/index']],
        ];

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
            'items' => $menuItems,
        ]);

        NavBar::end();
        ?>

        <div class="row">
            <div style="padding-left: 7em; " class="col-sm-12 p-8 ml-5 mt-5">
                <img style="padding-left: 5em; padding-top: 30px; height: 11em; width: auto;" src="uploads\cabecera2022.png" alt="Cabezera2022 self-portrait">
            </div>
        </div>
        <div class="row">
            <div style="background-color: #002147 ;" class="col-sm-7 p-3 pl-5 text-white">
                <h1 style="padding-left: 3em;" class="d-inline-block align-top"><?= Congreso::imprimirDato('nombre'); ?> </h1>
            </div>
            <div style="background-color: #002147 ;" class="col-sm-5 p-3 text-white">
                <p style="text-align: center;"><?= Congreso::interpDatoHTML('nota'); ?> </p>
            </div>
        </div>
    </header>



    <main role="main" class="flex-shrink-0">
        <div class="container">
            <!-- <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [], /* Barra navegacion media */
                    ]) ?> -->
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>


    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
