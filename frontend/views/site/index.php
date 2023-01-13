<?php

/** @var yii\web\View $this */

use app\models\Congreso;

$this->title = 'Congreso nacional';
?>

<style>
    h2 {
        font: normal normal normal 25px/1 Helvetica, arial, sans-serif;
        border-bottom: 2px solid #000;
        background: grey;
        color: #fff;
        text-align: center;
        height: 40px;
        padding: 10px 15px;
    }

    h2:after {
        /* the line under H2 */
        left: 0px;
        display: block;
        position: relative;
        width: 100%;
        height: 5px;
        margin-top: 2px;
        content: " ";
        background: #0070ff;
    }

    p {
        text-align: justify;
    }
</style>
<div>

    <h2><strong>Bienvenidos.</strong></h2>
    <p><?= Congreso::interpDatoHTML('bienvenida'); ?></p>
    <h2 style="text-align: center;"><strong>Congreso.</strong></h2>
    <p>
        Congreso que se celebrara a partir del dia:
        <?= Congreso::interpDatoHTML('fech_inicio'); ?> <br>
        Y terminara el dia:
        <?= Congreso::interpDatoHTML('fech_fin'); ?> <br>
        Mediante la modialida:
        <?= Congreso::interpDatoHTML('modalidad'); ?> <br>
    </p>
    <h2><strong>Objetivos.</strong></h2>
    <p> <?= Congreso::interpDatoHTML('objetivos'); ?> </p>

    <h2><strong>Consulta la convocatoria</strong></h2> <!-- //Seccion convocatoria -->
    <p> <?= Congreso::interpDatoHTML('txt_convocatoria'); ?> </p>
    <a href="<?= Congreso::interpDatoHTML('link_convocatoria'); ?>" class="button button-ind"> CONVOCATORIA </a>
    <br><br>


    <h2><strong>Programa general</strong></h2> <!-- //seccion programa_general -->
    <p> <?= Congreso::interpDatoHTML('txt_programa_general'); ?> </p>
    <a href="<?= Congreso::interpDatoHTML('link_programa_genral'); ?>" class="button button-ind"> PROGRAMA </a>
    <br><br>


    <h2><strong>Registro</strong></h2> <!-- seccion _registro_ponencia -->
    <p> <?= Congreso::interpDatoHTML('txt_registro_ponencia'); ?> </p>
    <a href="<?= Congreso::interpDatoHTML('link_registro_ponencia'); ?>" class="button button-ind"> REGISTRO </a>    
    <br><br>

</div>