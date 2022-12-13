<?php

use app\models\Congreso;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CongresoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Congresos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="congreso-index">

<head>
	<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="pingback" href="https://cru.valladolid.tecnm.mx/xmlrpc.php">

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<script>var et_site_url='https://cru.valladolid.tecnm.mx';var et_post_id='6';function et_core_page_resource_fallback(a,b){"undefined"===typeof b&&(b=a.sheet.cssRules&&0===a.sheet.cssRules.length);b&&(a.onerror=null,a.onload=null,a.href?a.href=et_site_url+"/?et_core_page_resource="+a.id+et_post_id:a.src&&(a.src=et_site_url+"/?et_core_page_resource="+a.id+et_post_id))}
</script><title>Congreso Regional Universitario | Otro sitio realizado con WordPress</title>
<meta name="robots" content="max-image-preview:large">
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//s.w.org">
<link rel="alternate" type="application/rss+xml" title="Congreso Regional Universitario » Feed" href="https://cru.valladolid.tecnm.mx/feed/">
<link rel="alternate" type="application/rss+xml" title="Congreso Regional Universitario » RSS de los comentarios" href="https://cru.valladolid.tecnm.mx/comments/feed/">
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/cru.valladolid.tecnm.mx\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.4"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script><script src="https://cru.valladolid.tecnm.mx/wp-includes/js/wp-emoji-release.min.js?ver=5.8.4" type="text/javascript" defer=""></script>
		<meta content="Divi v.4.4.9" name="generator"><style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel="stylesheet" id="wp-block-library-css" href="https://cru.valladolid.tecnm.mx/wp-includes/css/dist/block-library/style.min.css?ver=5.8.4" type="text/css" media="all">
<link rel="stylesheet" id="divi-fonts-css" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext&amp;display=swap" type="text/css" media="all">
<link rel="stylesheet" id="divi-style-css" href="https://cru.valladolid.tecnm.mx/wp-content/themes/Divi/Divi/style.css?ver=4.4.9" type="text/css" media="all">
<link rel="stylesheet" id="et-builder-googlefonts-cached-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;display=swap&amp;ver=5.8.4" type="text/css" media="all">
<link rel="stylesheet" id="dashicons-css" href="https://cru.valladolid.tecnm.mx/wp-includes/css/dashicons.min.css?ver=5.8.4" type="text/css" media="all">
<script type="text/javascript" src="https://cru.valladolid.tecnm.mx/wp-includes/js/jquery/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
<script type="text/javascript" src="https://cru.valladolid.tecnm.mx/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
<script type="text/javascript" src="https://cru.valladolid.tecnm.mx/wp-content/themes/Divi/Divi/core/admin/js/es6-promise.auto.min.js?ver=5.8.4" id="es6-promise-js"></script>
<script type="text/javascript" id="et-core-api-spam-recaptcha-js-extra">
/* <![CDATA[ */
var et_core_api_spam_recaptcha = {"site_key":"","page_action":{"action":"cru_valladolid_tecnm_mx"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://cru.valladolid.tecnm.mx/wp-content/themes/Divi/Divi/core/admin/js/recaptcha.js?ver=5.8.4" id="et-core-api-spam-recaptcha-js"></script>
<link rel="https://api.w.org/" href="https://cru.valladolid.tecnm.mx/wp-json/"><link rel="alternate" type="application/json" href="https://cru.valladolid.tecnm.mx/wp-json/wp/v2/pages/6"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://cru.valladolid.tecnm.mx/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://cru.valladolid.tecnm.mx/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 5.8.4">
<link rel="canonical" href="https://cru.valladolid.tecnm.mx/">
<link rel="shortlink" href="https://cru.valladolid.tecnm.mx/">
<link rel="alternate" type="application/json+oembed" href="https://cru.valladolid.tecnm.mx/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcru.valladolid.tecnm.mx%2F">
<link rel="alternate" type="text/xml+oembed" href="https://cru.valladolid.tecnm.mx/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcru.valladolid.tecnm.mx%2F&amp;format=xml">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><link rel="icon" href="https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/09/cropped-logoitsva-32x32.png" sizes="32x32">
<link rel="icon" href="https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/09/cropped-logoitsva-192x192.png" sizes="192x192">
<link rel="apple-touch-icon" href="https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/09/cropped-logoitsva-180x180.png">
<meta name="msapplication-TileImage" content="https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/09/cropped-logoitsva-270x270.png">
<link rel="stylesheet" id="et-core-unified-6-cached-inline-styles" href="https://cru.valladolid.tecnm.mx/wp-content/et-cache/6/et-core-unified-6-16678803818248.min.css" onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)"><style>[data-columns]::before{visibility:hidden;position:absolute;font-size:1px;}</style><style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style></head>
    
    <div id="et-main-area">
	
    <div id="main-content">
    
    
                
                    <article id="post-6" class="post-6 page type-page status-publish hentry">
    
                    
                        <div class="entry-content">
                        <div id="et-boc" class="et-boc">
                
            <div class="et-l et-l--post">
                <div class="et_builder_inner_content et_pb_gutters3">
            <div class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular">
                    
                    
                    
                    
                        <div class="et_pb_row et_pb_row_0">
                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">
                    
                    
                    <div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    
                </div> <!-- .et_pb_text --><div class="et_pb_module et_pb_slider et_pb_slider_0 et_pb_slider_fullwidth_off et_pb_bg_layout_dark" data-active-slide="et_pb_slide_0">
                    <div class="et_pb_slides">
                        <div class="et_pb_slide et_pb_slide_0 et_pb_bg_layout_dark et_pb_media_alignment_center et-pb-active-slide" data-slide-id="et_pb_slide_0">
                    
                    
                    <div class="et_pb_container clearfix et_pb_empty_slide" style="height: 206.9px;">
                        <div class="et_pb_slider_container_inner">
                            
                            <div class="et_pb_slide_description">
                                
                                
                            </div> <!-- .et_pb_slide_description -->
                        </div>
                    </div> <!-- .et_pb_container -->
                    
                </div> <!-- .et_pb_slide -->
                
                    </div> <!-- .et_pb_slides -->
                    
                </div> <!-- .et_pb_slider -->
                
                </div> <!-- .et_pb_column -->
                    
                    
                </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_1">
                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
                    
                    
                    <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><h2 style="text-align: center;"><strong>Bienvenidos.</strong></h2></div>
                </div> <!-- .et_pb_text --><div class="et_pb_module et_pb_text et_pb_text_2  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><p>&nbsp;El Tecnológico Nacional de México, Campus Valladolid&nbsp;Con el apoyo del CONACYT&nbsp;CONVOCA&nbsp;A estudiantes e instituciones educativas a presentar avances y/o resultados de trabajos en&nbsp;áreas de investigación, innovación, humanidades o experiencias académicas, en el:</p></div>
                </div> <!-- .et_pb_text --><div class="et_pb_module et_pb_text et_pb_text_3  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><h2 style="text-align: center;"><strong>Congreso.</strong></h2></div>
                </div> <!-- .et_pb_text --><div class="et_pb_module et_pb_text et_pb_text_4  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><p style="text-align: center;"><strong>Congreso Regional Universitario: Innovación y Experiencias en </strong><br><strong>Investigación en Tiempos de COVID-19</strong></p>
    <p style="text-align: justify;">Que se realizará en modalidad virtual del 17 al 31 de octubre del 2021 a través del Tecnológico Nacional de México, Campus Valladolid.</p></div>
                </div> <!-- .et_pb_text --><div class="et_pb_module et_pb_text et_pb_text_5  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><h2 style="text-align: center;"><strong>Objetivos.</strong></h2></div>
                </div> <!-- .et_pb_text --><div class="et_pb_module et_pb_text et_pb_text_6  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><p>Fomentar las vocaciones científicas de jóvenes estudiantes de los niveles medio superior y superior de comunidades marginadas y/o vulnerables de la etnia Maya de la Península de Yucatán, mediante la generación de un congreso que brinde espacios virtuales para la compartición de avances y/o resultados de trabajos en áreas de investigación, innovación, humanidades, de desarrollo tecnológico o experiencias académicas, realizadas en tiempos de COVID-19.</p></div>
                </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->
                    
                    
                </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_2">
                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_2  et_pb_css_mix_blend_mode_passthrough et-last-child">
                    
                    
                    <div class="et_pb_module et_pb_text et_pb_text_7  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><h2 style="text-align: center;">Consulta la convocatoria</h2></div>
                </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->
                    
                    
                </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_3">
                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_3  et_pb_css_mix_blend_mode_passthrough et-last-child">
                    
                    
                    <div class="et_pb_module et_pb_text et_pb_text_8  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><p><strong>El Tecnológico Nacional de México, Campus Valladolid</strong>&nbsp;Con el apoyo del <strong>CONACYT</strong></p>
                    
                    <!-- IDEA DE ALONDRI PARA LA IMPRESION -->
                    <?php 
                    $query=Yii::$app->db;
                    //$query->createCommand('SELECT * FROM congreso WHERE estatus=1')->execute();
                    $query->createCommand('SELECT * FROM congreso WHERE estatus=1')->execute();
                    /* $resultado = $query-> fetchAll(PDO::FETCH_OBJ); */
                    /* foreach ($query as $fila){                                                
                        echo $fila-> bienvenida ;
                    } */
                    $seleccion = Congreso :: findOne($idCongreso = 1);
                    $json = json_encode($seleccion); 
                    echo ($json)

                    ?>
    <p style="text-align: center;">CONVOCA</p>
    <p>A estudiantes e instituciones educativas a presentar avances y/o resultados de trabajos en&nbsp;áreas de investigación, innovación, humanidades o experiencias académicas, en el:</p>
    <p style="text-align: center;"><strong>Congreso Regional Universitario: Innovación y Experiencias en&nbsp;Investigación en Tiempos de COVID-19&nbsp;Que se realizará en modalidad virtual del 17 al 31 de octubre del 2021 a través del&nbsp;Tecnológico Nacional de México, Campus Valladolid</strong>.</p>
    <p>Descarga la convocatoria completa para conocer las bases en el siguiente botón</p></div>
                </div> <!-- .et_pb_text --><div class="et_pb_button_module_wrapper et_pb_button_0_wrapper et_pb_button_alignment_center et_pb_module ">
                    <a class="et_pb_button et_pb_custom_button_icon et_pb_button_0 et_pb_bg_layout_light" href="https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/09/convocatoria.pdf" data-icon="E">Convocatoria</a>
                </div>
                </div> <!-- .et_pb_column -->
                    
                    
                </div> <!-- .et_pb_row -->
                    
                    
                </div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_1 et_pb_with_background et_section_regular">
                    
                    
                    
                    
                        <div class="et_pb_row et_pb_row_4">
                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_4  et_pb_css_mix_blend_mode_passthrough et-last-child">
                    
                    
                    <div class="et_pb_module et_pb_text et_pb_text_9  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><h2 style="text-align: center;">Programa general</h2></div>
                </div> <!-- .et_pb_text --><div class="et_pb_module et_pb_text et_pb_text_10  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><p>Conoce el programa general de nuestro congreso, haz clic en el boton descargar para consultarlo.</p>
    <ul>
    <li>Envío o registro de propuestas de ponencias en EasyChair: del 30 de agosto del 2021 al 22 de septiembre de 2021</li>
    <li>Arbitraje y selección para el congreso: Del 02 al 10 de octubre de 2021.</li>
    <li>Recepción de trabajos finales para las ponencias y memorias de congreso a través de este sitio web: del 11 al 15 de octubre del 2021</li>
    <li>Presentación de ponencias: Del 18 al 24 de octubre del 2021</li>
    <li>Entrega de constancias: 05 de noviembre del 2021.</li>
    </ul>
    <p>Descarga las diapositivas con el programa completo en el siguiente enlace:</p>
    <p>&nbsp;</p></div>
                </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->
                    
                    
                </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_5">
                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_5  et_pb_css_mix_blend_mode_passthrough et-last-child">
                    
                    
                    <div class="et_pb_button_module_wrapper et_pb_button_1_wrapper et_pb_button_alignment_center et_pb_module ">
                    <a class="et_pb_button et_pb_custom_button_icon et_pb_button_1 et_pb_bg_layout_light" href="https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/10/CRUITSVA2021.pdf" data-icon="E">Descargar</a>
                </div>
                </div> <!-- .et_pb_column -->
                    
                    
                </div> <!-- .et_pb_row -->
                    
                    
                </div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_2 et_pb_with_background et_section_regular">
                    
                    
                    
                    
                        <div class="et_pb_row et_pb_row_6">
                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_6  et_pb_css_mix_blend_mode_passthrough et-last-child">
                    
                    
                    <div class="et_pb_module et_pb_text et_pb_text_11  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><h2 style="text-align: center;">Registro</h2></div>
                </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->
                    
                    
                </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_7">
                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_7  et_pb_css_mix_blend_mode_passthrough et-last-child">
                    
                    
                    <div class="et_pb_module et_pb_text et_pb_text_12  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><p>Revisa los requisitos para el registro a nuestro congreso, todo el proceso de registro y recepción de trabajos se lleva a cabo a través de la plataforma EasyChair.</p>
    <p>Descarga en el boton “Tutorial de Registro” el tutorial en PDF para llevar a cabo el proceso de registro en sitio de EasyChair</p></div>
                </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->
                    
                    
                </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_8">
                    <div class="et_pb_column et_pb_column_2_5 et_pb_column_8  et_pb_css_mix_blend_mode_passthrough">
                    
                    
                    <div class="et_pb_module et_pb_image et_pb_image_0">
                    
                    
                    <a href="https://easychair.org/conferences/?conf=cru1itsva"><span class="et_pb_image_wrap "><img src="https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/10/logoEC.png" alt="" title="logoEC" srcset="https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/10/logoEC.png 650w, https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/10/logoEC-480x128.png 480w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 650px, 100vw"></span></a>
                </div>
                </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_3_5 et_pb_column_9  et_pb_css_mix_blend_mode_passthrough et-last-child">
                    
                    
                    <div class="et_pb_module et_pb_text et_pb_text_13  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><p>Utilice el ícono de la izquierda si ya tiene cuenta para ingresar a la plataforma Easychair y envíar sus ponencias.</p></div>
                </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->
                    
                    
                </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_9">
                    <div class="et_pb_column et_pb_column_2_5 et_pb_column_10  et_pb_css_mix_blend_mode_passthrough">
                    
                    
                    <div class="et_pb_button_module_wrapper et_pb_button_2_wrapper et_pb_button_alignment_center et_pb_module ">
                    <a class="et_pb_button et_pb_button_2 et_pb_bg_layout_light" href="https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/09/guiaderegistrocru.pdf">Tutorial de Registro</a>
                </div>
                </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_3_5 et_pb_column_11  et_pb_css_mix_blend_mode_passthrough et-last-child">
                    
                    
                    <div class="et_pb_module et_pb_text et_pb_text_14  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><p>Descargue el manual en pdf para ver los pasos de registro en la plataforma EasyChair</p></div>
                </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->
                    
                    
                </div> <!-- .et_pb_row -->
                    
                    
                </div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_3 et_pb_with_background et_section_regular">
                    
                    
                    
                    
                        <div class="et_pb_row et_pb_row_10">
                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_12  et_pb_css_mix_blend_mode_passthrough et-last-child">
                    
                    
                    <div class="et_pb_module et_pb_text et_pb_text_15  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><h2>Comité organizador</h2></div>
                </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->
                    
                    
                </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_11">
                    <div class="et_pb_column et_pb_column_1_3 et_pb_column_13  et_pb_css_mix_blend_mode_passthrough">
                    
                    
                    <div class="et_pb_module et_pb_image et_pb_image_1">
                    
                    
                    <span class="et_pb_image_wrap "><img src="https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/10/comiteorganizador.jpg" alt="" title="comiteorganizador" srcset="https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/10/comiteorganizador.jpg 734w, https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/10/comiteorganizador-480x251.jpg 480w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 734px, 100vw"></span>
                </div>
                </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_14  et_pb_css_mix_blend_mode_passthrough et_pb_column_empty">
                    
                    
                    
                </div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_15  et_pb_css_mix_blend_mode_passthrough et-last-child">
                    
                    
                    <div class="et_pb_module et_pb_text et_pb_text_16  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><h4>Responsable Legal:</h4>
    <p>Mtro. Wilbert de Jesús Ortegón López<br> Responsable Administrativo:<br> C.P. Álvaro Humberto Calderón Ku<br> Responsable Técnico ante CONACYT:<br> M.T.I. Jesús Antonio Santos Tejero<br> Colaboradores:<br> M.E. Diana Aracelly Loría Arjona<br> M.E. Mirna Yamili Yam Puc<br> M.E. Nelly del Rosario Chan Perera<br> M.M. Rusell Renan Iuit Manzanero</p></div>
                </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->
                    
                    
                </div> <!-- .et_pb_row -->
                    
                    
                </div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_4 et_pb_with_background et_section_regular">
                    
                    
                    
                    
                        <div class="et_pb_row et_pb_row_12">
                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_16  et_pb_css_mix_blend_mode_passthrough et-last-child">
                    
                    
                    <div class="et_pb_module et_pb_text et_pb_text_17  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><h2>Comité Científico</h2></div>
                </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->
                    
                    
                </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_13">
                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_17  et_pb_css_mix_blend_mode_passthrough et-last-child">
                    
                    
                    <div class="et_pb_module et_pb_image et_pb_image_2">
                    
                    
                    <span class="et_pb_image_wrap "><img src="https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/10/comite-cientifico.jpg" alt="" title="comite cientifico" srcset="https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/10/comite-cientifico.jpg 921w, https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/10/comite-cientifico-480x257.jpg 480w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 921px, 100vw"></span>
                </div>
                </div> <!-- .et_pb_column -->
                    
                    
                </div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_14">
                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_18  et_pb_css_mix_blend_mode_passthrough et-last-child">
                    
                    
                    <div class="et_pb_module et_pb_text et_pb_text_18  et_pb_text_align_left et_pb_bg_layout_light">
                    
                    
                    <div class="et_pb_text_inner"><table width="802">
    <tbody>
    <tr>
    <td width="64">Num</td>
    <td width="127">Nombre (s)</td>
    <td width="128">Apellidos</td>
    <td width="483">Institución</td>
    </tr>
    <tr>
    <td>1</td>
    <td width="127">Leopoldo Querubín</td>
    <td width="128">Cutz Pool</td>
    <td width="483">Doctor en Ciencias. Tecnológico Nacional de México, Campus Chetumal</td>
    </tr>
    <tr>
    <td>2</td>
    <td width="127">Roberto</td>
    <td width="128">Briceño</td>
    <td width="483">Escuela Normal “Juan de Dios Rodríguez Heredia”</td>
    </tr>
    <tr>
    <td>3</td>
    <td width="127">Ramos Martín</td>
    <td width="128">Silva Castro</td>
    <td width="483">Escuela Normal “Juan de Dios Rodríguez Heredia”</td>
    </tr>
    <tr>
    <td>4</td>
    <td width="127">Rubén Ariel</td>
    <td width="128">García Pacheco</td>
    <td width="483">Escuela Normal “Juan de Dios Rodríguez Heredia”</td>
    </tr>
    <tr>
    <td>5</td>
    <td width="127">José Manuel</td>
    <td width="128">Castro Pérez</td>
    <td width="483">Doctor en Ciencias, Tecnológico de México, Campus Instituto Tecnológioc de Chetumal</td>
    </tr>
    <tr>
    <td>6</td>
    <td width="127">Miguel Angel</td>
    <td width="128">Cohuo Avila</td>
    <td width="483">Instituto Tecnológico Superior de Calkini en el Estado de Campeche</td>
    </tr>
    <tr>
    <td>7</td>
    <td width="127">Jose Luis</td>
    <td width="128">Lira Turriza</td>
    <td width="483">Instituto Tecnológico Superior de Calkini en el Estado de Campeche</td>
    </tr>
    <tr>
    <td>8</td>
    <td width="127">José Manuel</td>
    <td width="128">Lira Turriza</td>
    <td width="483">Instituto Tecnológico Superior de Calkini en el Estado de Campeche</td>
    </tr>
    <tr>
    <td>9</td>
    <td width="127">Maria del Carmen</td>
    <td width="128">De la Peña Corral&nbsp;</td>
    <td width="483">Instituto Universitario de Investigacion Ortega y Gasset</td>
    </tr>
    <tr>
    <td>10</td>
    <td width="127">Olivia Guadalupe</td>
    <td width="128">Ortiz Cel</td>
    <td width="483">Instituto Tecnológico Superior de Calkini en el Estado de Campeche</td>
    </tr>
    <tr>
    <td>11</td>
    <td width="127">Yaqueline</td>
    <td width="128">Pech Huh</td>
    <td width="483">Instituto Tecnológico Superior de Calkini en el Estado de Campeche</td>
    </tr>
    <tr>
    <td>12</td>
    <td width="127">Jose Francisco</td>
    <td width="128">Hernandez Libreros</td>
    <td width="483">TECNM FELIPE CARRILLO PUERTO</td>
    </tr>
    <tr>
    <td>13</td>
    <td width="127">Jesús Antonio</td>
    <td width="128">Santos Tejero</td>
    <td width="483">Tecnológico Nacional de México, Campus Valladolid</td>
    </tr>
    <tr>
    <td>14</td>
    <td width="127">Diana Aracelly&nbsp;</td>
    <td width="128">Loría Arjona</td>
    <td width="483">Tecnológico Nacional de México, Campus Valladolid</td>
    </tr>
    <tr>
    <td>15</td>
    <td width="127">Nelly del Rosario</td>
    <td width="128">Chan Perera</td>
    <td width="483">Tecnológico Nacional de México, Campus Valladolid</td>
    </tr>
    <tr>
    <td>16</td>
    <td width="127">Mirna Yamili</td>
    <td width="128">Yam Puc</td>
    <td width="483">Tecnológico Nacional de México, Campus Valladolid</td>
    </tr>
    <tr>
    <td>17</td>
    <td width="127">Rusell Renán</td>
    <td width="128">Iuit Manzanero</td>
    <td width="483">Tecnológico Nacional de México, Campus Valladolid</td>
    </tr>
    <tr>
    <td>18</td>
    <td width="127">Delghi Yudire</td>
    <td width="128">Ruiz Patrón</td>
    <td width="483">Tecnológico Nacional de México, Campus Valladolid</td>
    </tr>
    <tr>
    <td>19</td>
    <td width="127">Juan Pablo</td>
    <td width="128">Ucán Pech</td>
    <td width="483">Universidad Autónoma de Yucatán- Facultad de Matemáticas</td>
    </tr>
    <tr>
    <td>20</td>
    <td width="127">Michel</td>
    <td width="128">García García</td>
    <td width="483">UADY FMAT UMT</td>
    </tr>
    <tr>
    <td>21</td>
    <td width="127">Victor Manuel</td>
    <td width="128">Chi Pech</td>
    <td width="483">Universidad Autónoma de Yucatán – Facultad de Matemáticas UMT</td>
    </tr>
    <tr>
    <td>22</td>
    <td width="127">Maximiliano</td>
    <td width="128">Canché Euán</td>
    <td width="483">Universidad Autónoma de Yucatán</td>
    </tr>
    <tr>
    <td>23</td>
    <td width="127">Julio César</td>
    <td width="128">Díaz Mendoza</td>
    <td width="483">Universidad Autónoma de Yucatán</td>
    </tr>
    <tr>
    <td>24</td>
    <td width="127">Cinhtia Maribel</td>
    <td width="128">González Segura</td>
    <td width="483">Universidad Autónoma de Yucatán</td>
    </tr>
    <tr>
    <td>25</td>
    <td width="127">Raúl Antonio</td>
    <td width="128">Aguilar Vera</td>
    <td width="483">Universidad Autónoma de Yucatán- Facultad de Matemáticas</td>
    </tr>
    <tr>
    <td>26</td>
    <td width="127">Natalie Sofia</td>
    <td width="128">Rojas Vilches</td>
    <td width="483">Universidad de Girona</td>
    </tr>
    <tr>
    <td>27</td>
    <td width="127">Margarita de Abril&nbsp;</td>
    <td width="128">Navarro Favela&nbsp;</td>
    <td width="483">Universidad Intercultural Maya de Quintana Roo</td>
    </tr>
    <tr>
    <td>28</td>
    <td width="127">Lidia</td>
    <td width="128">Serralta</td>
    <td width="483">Universidad Intercultural Maya de Quintana Roo</td>
    </tr>
    <tr>
    <td>29</td>
    <td width="127">José</td>
    <td width="128">Franco</td>
    <td width="483">&nbsp;</td>
    </tr>
    <tr>
    <td></td>
    <td colspan="3" width="255">Copyright © 2002 – 2021 EasyChair</td>
    </tr>
    </tbody>
    </table></div>
                </div> <!-- .et_pb_text -->
                </div> <!-- .et_pb_column -->
                    
                    
                </div> <!-- .et_pb_row -->
                    
                    
                </div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_5 et_section_regular">
                    
                    
                    
                    
                        <div class="et_pb_row et_pb_row_15">
                    <div class="et_pb_column et_pb_column_4_4 et_pb_column_19  et_pb_css_mix_blend_mode_passthrough et-last-child">
                    
                    
                    <div class="et_pb_module et_pb_image et_pb_image_3">
                    
                    
                    <span class="et_pb_image_wrap "><img src="https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/09/piedepagina.jpg" alt="" title="piedepagina" srcset="https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/09/piedepagina.jpg 2001w, https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/09/piedepagina-1280x448.jpg 1280w, https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/09/piedepagina-980x343.jpg 980w, https://cru.valladolid.tecnm.mx/wp-content/uploads/2021/09/piedepagina-480x168.jpg 480w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) and (max-width: 980px) 980px, (min-width: 981px) and (max-width: 1280px) 1280px, (min-width: 1281px) 2001px, 100vw"></span>
                </div>
                </div> <!-- .et_pb_column -->
                    
                    
                </div> <!-- .et_pb_row -->
                    
                    
                </div> <!-- .et_pb_section -->		</div><!-- .et_builder_inner_content -->
        </div><!-- .et-l -->
        
                
            </div><!-- #et-boc -->
                                </div> <!-- .entry-content -->
    
                    
                    </article> <!-- .et_pb_post -->
    
                
    
    </div> <!-- #main-content -->
    
    
                <footer id="main-footer">
                    
    <div class="container">
        <div id="footer-widgets" class="clearfix">
            <div class="footer-widget"><div id="block-5" class="fwidget et_pb_widget widget_block">
    <div class="wp-block-group"><div class="wp-block-group__inner-container"></div></div>
    </div> <!-- end .fwidget --><div id="block-6" class="fwidget et_pb_widget widget_block">
    <div class="wp-block-group"><div class="wp-block-group__inner-container"></div></div>
    </div> <!-- end .fwidget --></div> <!-- end .footer-widget --><div class="footer-widget"></div> <!-- end .footer-widget --><div class="footer-widget"></div> <!-- end .footer-widget --><div class="footer-widget"></div> <!-- end .footer-widget -->    </div> <!-- #footer-widgets -->
    </div>    <!-- .container -->
    
            
                    <div id="footer-bottom">
                        <div class="container clearfix">
                    <ul class="et-social-icons">
    
        <li class="et-social-icon et-social-facebook">
            <a href="#" class="icon">
                <span>Facebook</span>
            </a>
        </li>
        <li class="et-social-icon et-social-twitter">
            <a href="#" class="icon">
                <span>Twitter</span>
            </a>
        </li>
        <li class="et-social-icon et-social-google-plus">
            <a href="#" class="icon">
                <span>Google</span>
            </a>
        </li>
        <li class="et-social-icon et-social-instagram">
            <a href="#" class="icon">
                <span>Instagram</span>
            </a>
        </li>
        <li class="et-social-icon et-social-rss">
            <a href="https://cru.valladolid.tecnm.mx/feed/" class="icon">
                <span>RSS</span>
            </a>
        </li>
    
    </ul><div id="footer-info">Diseño <a href="https://www.creativamarketing.mx">Creativa Marketing </a></div>					</div>	<!-- .container -->
                    </div>
                </footer> <!-- #main-footer -->
            </div>


</div>