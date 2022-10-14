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



class controlador_cat_sat_isn extends \controllers\controlador_cat_sat_isn {


    public function __construct(PDO $link, stdClass $paths_conf = new stdClass())
    {

        $html_base = new html();
        parent::__construct(link: $link);
        $this->titulo_lista = 'Impuesto Sobre Nomina';

        $this->total_items_sections = 1;

        $this->actions_number['lista']['item'] = 1;
        $this->actions_number['lista']['etiqueta'] = 'Configuracion de factura';

        $this->actions_number['alta']['item'] = 1;
        $this->actions_number['alta']['etiqueta'] = 'Configuracion de factura';


        $this->number_active = 1;

        if(isset($this->actions_number[$this->accion])){
            $this->number_active = $this->actions_number[$this->accion]['item'];
        }

        $menu_lateral = (new menu_lateral())->number_head(number_active: $this->number_active);
        if(errores::$error){
            $error = $this->errores->error(mensaje: 'Error al integrar include', data: $menu_lateral);
            print_r($error);
            exit;
        }
        $this->menu_lateral = $menu_lateral;
    }
}
