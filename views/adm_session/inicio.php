<?php /** @var \tglobally\tg_cat_gen\controllers\controlador_adm_session $controlador */

use config\views;
$url_assets = (new views())->url_assets;
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="cont_text_inicio">
                <h1 class="h-side-title page-title page-title-big text-color-primary">Hola, Nombre Completo</h1>
                <h1 class="h-side-title page-title text-color-primary">Da click en la sección que deseas utilizar</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">


        <div class="col-md-12">
            <div class="col-sm-2">
                <a href="<?php echo $controlador->link_lista_nom_conf_abono; ?>">
                    <div class="cont_imagen_accion">
                        <img src="<?php echo $url_assets; ?>img/inicio/imagen_2.jpg">
                    </div>
                    <div class="cont_text_accion">
                        <h4 class="text_seccion">Configuracion Abono</h4>
                        <h4 class="text_accion">Catologo</h4>
                    </div>
                </a>
            </div>

            <div class="col-sm-2">
                <a href="<?php echo $controlador->link_lista_nom_conf_nomina; ?>">
                    <div class="cont_imagen_accion">
                        <img src="<?php echo $url_assets; ?>img/inicio/imagen_2.jpg">
                    </div>
                    <div class="cont_text_accion">
                        <h4 class="text_seccion">Configuracion Nomina</h4>
                        <h4 class="text_accion">Catologo</h4>
                    </div>
                </a>
            </div>

            <div class="col-sm-2">
                <a href="<?php echo $controlador->link_lista_nom_conf_empleado; ?>">
                    <div class="cont_imagen_accion">
                        <img src="<?php echo $url_assets; ?>img/inicio/imagen_2.jpg">
                    </div>
                    <div class="cont_text_accion">
                        <h4 class="text_seccion">Configuracion Empleados</h4>
                        <h4 class="text_accion">Catologo</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo $controlador->link_lista_nom_conf_factura; ?>">
                    <div class="cont_imagen_accion">
                        <img src="<?php echo $url_assets; ?>img/inicio/imagen_2.jpg">
                    </div>
                    <div class="cont_text_accion">
                        <h4 class="text_seccion">Configuracion Factura</h4>
                        <h4 class="text_accion">Catologo</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo $controlador->link_lista_nom_proceso_nomina; ?>">
                    <div class="cont_imagen_accion">
                        <img src="<?php echo $url_assets; ?>img/inicio/imagen_2.jpg">
                    </div>
                    <div class="cont_text_accion">
                        <h4 class="text_seccion">Configuracion Proceso Nomina</h4>
                        <h4 class="text_accion">Catologo</h4>
                    </div>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="<?php echo $controlador->link_lista_pr_etapa; ?>">
                    <div class="cont_imagen_accion">
                        <img src="<?php echo $url_assets; ?>img/inicio/imagen_2.jpg">
                    </div>
                    <div class="cont_text_accion">
                        <h4 class="text_seccion">Etapas proceso</h4>
                        <h4 class="text_accion">Catologo</h4>
                    </div>
                </a>
            </div>


        </div>
    </div>
</div>