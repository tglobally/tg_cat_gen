<?php /** @var \tglobally\tg_cat_gen\controllers\controlador_nom_conf_nomina $controlador */ ?>

<?php (new \tglobally\template_tg\template())->sidebar($controlador); ?>

<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?> </h3>

        <div class="  form-main" id="form">
            <form method="post" action="<?php echo $controlador->link_nom_conf_percepcion_alta_bd;?>" class="form-additional">
                <?php echo $controlador->inputs->codigo; ?>
                <?php echo $controlador->inputs->nom_conf_factura_id; ?>
                <?php echo $controlador->inputs->descripcion; ?>
                <?php echo $controlador->inputs->cat_sat_periodicidad_pago_nom_id; ?>
                <?php echo $controlador->inputs->cat_sat_tipo_nomina_id; ?>
                <div class="buttons col-md-12">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " name="btn_action_next" value="modifica">Guarda</button>
                    </div>
                    <div class="col-md-6 ">
                        <a href="<?php echo $controlador->link_lista; ?>"  class="btn btn-info btn-guarda col-md-12 ">Lista</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="widget widget-box box-container widget-mylistings">
                        <div class="widget-header" style="display: flex;justify-content: space-between;align-items: center;">
                            <h2>Percepciones Asignadas</h2>
                        </div>
                        <div class="">
                            <table id="nom_conf_percepcion" class="table table-striped" >
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


