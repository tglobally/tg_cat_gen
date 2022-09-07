<?php
/**
 * @author Martin Gamboa Vazquez
 * @version 1.0.0
 * @created 2022-05-14
 * @final En proceso
 *
 */
namespace tglobally\tg_cat_gen\controllers;
use gamboamartin\errores\errores;
use PDO;
use stdClass;
use tglobally\template_tg\html;
use tglobally\template_tg\menu_lateral;


class controlador_nom_conf_factura extends \gamboamartin\nomina\controllers\controlador_nom_conf_factura {


    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){

        $html_base = new html();
        parent::__construct( link: $link, html: $html_base);
        $this->titulo_lista = 'Configuracion Factura';

        $keys_row_lista = $this->keys_rows_lista();
        if(errores::$error){
            $error = $this->errores->error(mensaje: 'Error al generar keys de lista',data:  $keys_row_lista);
            print_r($error);
            exit;
        }

        $this->keys_row_lista = $keys_row_lista;
        $this->total_items_sections = 7;

        $this->actions_number['lista']['item'] = 1;
        $this->actions_number['lista']['etiqueta'] = 'Nueva Empresa';

        $this->actions_number['alta']['item'] = 1;
        $this->actions_number['alta']['etiqueta'] = 'Alta';

        $this->actions_number['modifica']['item'] = 1;
        $this->actions_number['modifica']['etiqueta'] = 'Generales';


        if(isset($this->actions_number[$this->accion])){
            $this->number_active = $this->actions_number[$this->accion]['item'];
        } else {
            $this->number_active = 1;
        }

        $menu_lateral = (new menu_lateral())->number_head(number_active: $this->number_active);
        if(errores::$error){
            $error = $this->errores->error(mensaje: 'Error al integrar include', data: $menu_lateral);
            print_r($error);
            exit;
        }
        $this->menu_lateral = $menu_lateral;
    }

    private function keys_rows_lista(): array
    {

        $keys_row_lista = array();

        $keys = array('nom_conf_factura_id','nom_conf_factura_codigo','nom_conf_factura_descripcion','nom_conf_factura_descripcion_select');

        foreach ($keys as $campo){
            $keys_row_lista = $this->key_row_lista_init(campo: $campo, keys_row_lista: $keys_row_lista);
            if(errores::$error){
                return $this->errores->error(mensaje: 'Error al inicializar key',data: $keys_row_lista);
            }
        }

        return $keys_row_lista;
    }

    private function key_row_lista_init(string $campo, array $keys_row_lista): array
    {
        $data = new stdClass();
        $data->campo = $campo;

        $campo = str_replace(array('nom_conf_factura', '_'), array('', ' '), $campo);
        $campo = ucfirst(strtolower($campo));

        $data->name_lista = $campo;
        $keys_row_lista[]= $data;
        return $keys_row_lista;
    }


}