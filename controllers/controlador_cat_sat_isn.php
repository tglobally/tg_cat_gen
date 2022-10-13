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
    }
}
