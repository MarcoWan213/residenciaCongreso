<?php

/** @var yii\web\View $this */

use app\models\Congreso;

$this->title = 'Congreso nacional';
?>

<style>
    body {
        text-align: center;
    }

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

    .card-4 {
        text-align: center;
        border-radius: 2px;
        display: inline-block;
        height: 4em;
        margin: 1rem;
        position: relative;
        width: 500px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

    h3 {
        position: relative;
        padding: 0;
        margin: 0;
        font-family: "Raleway", sans-serif;
        font-weight: 300;
        font-size: 40px;
        color: #080808;
        -webkit-transition: all 0.4s ease 0s;
        -o-transition: all 0.4s ease 0s;
        transition: all 0.4s ease 0s;
    }

    h3 span {
        display: block;
        font-size: 0.5em;
        line-height: 1.3;
    }

    h3 em {
        font-style: normal;
        font-weight: 600;
    }

    .eight h3 {
        text-align: center;

        text-transform: uppercase;
        font-size: 26px;
        letter-spacing: 1px;

        display: grid;
        grid-template-columns: 1fr auto 1fr;
        grid-template-rows: 16px 0;
        grid-gap: 22px;
    }

    .eight h3:after,
    .eight h3:before {
        content: " ";
        display: block;
        border-bottom: 2px solid #ccc;
        background-color: #f8f8f8;
    }

    .ten h3 {
        font-size: 26px;
        font-weight: 500;
        text-transform: uppercase;
    }

    .ten h3:before {
        background-color: #c50000;
        border-radius: 0.25rem;
        content: '';
        display: block;
        height: 0.25rem;
        width: 84px;
        margin-bottom: 1rem;
    }

    .three h3 {
        font-size: 28px;
        font-weight: 500;
        letter-spacing: 0;
        line-height: 1.5em;
        padding-bottom: 15px;
        position: relative;
    }

    .three h3:before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 5px;
        width: 55px;
        background-color: #111;
    }

    .three h3:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 2px;
        height: 1px;
        width: 95%;
        max-width: 305px;
        background-color: #333;
    }

    p {        
        font-family: 'Open Sans', sans-serif;
        font-size: 15px;
        font-weight: 400;
        line-height: 24px;
        margin: 0 0 14px;        
    }
</style>

<?php
$ciclos = Congreso::find()->where(['publicado' => '1'])->all();
foreach ($ciclos as $ciclo) {
    $id =  $ciclo->idCongreso; //atributos
    $talleres = Congreso::find()->where(['idCongreso' => $ciclo->idCongreso])->all();
}
foreach ($talleres as $taller) {

    echo "        
            <div>    
                <div class=card-4>                    
                    <div class=three>
                        <h3>BIENVENIDOS</h3>
                    </div>                                          
                </div>
                <p>$taller->bienvenida</p>
                <div class=card-4>                    
                    <div class=three>
                        <h3>CONGRESO</h3>
                    </div>                                          
                </div>                
                <p>
                    Congreso que se celebrara a partir del dia:
                    $taller->fech_inicio <br>
                    Y terminara el dia:
                    $taller->fech_fin        <br>             
                    Mediante la modialida:
                    $taller->modalidad <br>
                </p>

                <div class=card-4>                    
                    <div class=three>
                        <h3>OBJETIVOS</h3>
                    </div>                                          
                </div>  
                <p>
                $taller->objetivos
                </p>
                <div class=card-4>                    
                    <div class=three>
                        <h3>CONVOCATORIA</h3>
                    </div>                                          
                </div>  
                <p>
                $taller->txt_convocatoria
                </p>
                <a href=$taller->link_convocatoria class='button button-ind' > CONVOCATORIA </a>
                
                <br>
                <div class=card-4>                    
                    <div class=three>
                        <h3>PROGRAMA GENERAL</h3>
                    </div>                                          
                </div>  
                <p>
                $taller->txt_programa_general
                </p>
                <a href=$taller->link_programa_genral class='button button-ind' > PROGRAMA </a>
                
                <br>
                <div class=card-4>                    
                    <div class=three>
                        <h3>REGISTRO</h3>
                    </div>                                          
                </div>  
                <p>
                $taller->txt_registro_ponencia
                </p>
                <a href=$taller->link_registro_ponencia class='button button-ind' > REGISTRO </a>
            </div>
            ";
}
?>