<?php /** @var \tglobally\tg_cat_gen\controllers\controlador_nom_conf_factura $controlador */ ?>
<?php include $controlador->include_menu_secciones; ?>
<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?> </h3>

        <div class="  form-main" id="form">
            <form method="post" action="<?php echo $controlador->link_modifica_bd; ?>" class="form-additional">
                <?php echo $controlador->inputs->id; ?>
                <?php echo $controlador->inputs->codigo; ?>
                <?php echo $controlador->inputs->codigo_bis; ?>
                <?php echo $controlador->inputs->descripcion; ?>
                <?php echo $controlador->inputs->descripcion_select; ?>
                <?php echo $controlador->inputs->alias; ?>
                <div class="buttons col-md-12">
                    <div class="col-md-6 btn-ancho">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " value="modifica">Modifica</button>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo $controlador->link_lista ?>" class="btn btn-info btn-guarda col-md-12 ">Regresar</a>
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>
