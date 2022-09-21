<?php /** @var \tglobally\tg_cat_gen\controllers\controlador_nom_conf_nomina $controlador */ ?>
<?php include $controlador->include_menu_secciones; ?>
<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?> </h3>

        <div class="  form-main" id="form">
            <form method="post" action="<?php echo $controlador->link_nom_conf_percepcion_alta_bd; ?>" class="form-additional">
                <?php echo $controlador->inputs->codigo; ?>
                <?php echo $controlador->inputs->select->nom_conf_nomina_id; ?>
                <?php echo $controlador->inputs->descripcion; ?>
                <?php echo $controlador->inputs->select->nom_percepcion_id; ?>
                <?php echo $controlador->inputs->importe_gravado; ?>
                <?php echo $controlador->inputs->importe_exento; ?>
                <?php echo $controlador->inputs->fecha_inicio; ?>
                <?php echo $controlador->inputs->fecha_fin; ?>
                <div class="buttons col-md-12">
                    <div class="col-md-6 btn-ancho">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " value="modifica">Alta</button>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo $controlador->link_lista ?>" class="btn btn-info btn-guarda col-md-12 ">Regresar</a>
                    </div>
                </div>
            </form>


        </div>

        <div class="lista">
            <div class="card">
                <div class="card-header">
                    <span class="text-header">Percepciones Asignadas</span>
                </div>
                <div class="card-body">
                    <div class="cont_tabla_sucursal  col-md-12">
                        <table class="table ">
                            <thead>
                            <tr>
                                <th data-breakpoints="xs sm md" data-type="html" >Id</th>
                                <th data-breakpoints="xs sm md" data-type="html" >Codigo</th>
                                <th data-breakpoints="xs sm md" data-type="html" >Codigo Bis</th>
                                <th data-breakpoints="xs sm md" data-type="html" >Descripcion</th>
                                <th data-breakpoints="xs sm md" data-type="html" >Descripcion Select</th>
                                <th data-breakpoints="xs sm md" data-type="html" data-filterable="false">Modifica</th>
                                <th data-breakpoints="xs sm md" data-type="html" data-filterable="false">Elimina</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($controlador->percepciones->registros as $percepcion){?>

                                <tr>
                                    <td><?php echo $percepcion['nom_conf_percepcion_id']; ?></td>
                                    <td><?php echo $percepcion['nom_conf_percepcion_codigo']; ?></td>
                                    <td><?php echo $percepcion['nom_conf_percepcion_codigo_bis']; ?></td>
                                    <td><?php echo $percepcion['nom_conf_percepcion_descripcion']; ?></td>
                                    <td><?php echo $percepcion['nom_conf_percepcion_descripcion_select']; ?></td>
                                    <td><?php echo $percepcion['link_modifica']; ?></td>
                                    <td><?php echo $percepcion['link_elimina']; ?></td>
                                </tr>
                            <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
