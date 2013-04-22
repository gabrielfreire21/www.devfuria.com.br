<?php
/**
 * Arquivo index que funciona como redirecionador
 */


/**
 * Includes
 */
require "../../../furia/boot.php";


/**
 * Instancia a matéria
 */
define("LOGICA_DE_PROGRAMACAO", 1);
$materia = new Materia();
$materia->carregar(Materia::idXML_PHP, LOGICA_DE_PROGRAMACAO);
$materia->setNivel(Materia::BASICO);


/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";

?>