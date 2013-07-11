<?php
/**
 * Arquivo index que funciona como redirecionador
 */


/**
 * Includes
 */
require "../../../furia/boot.php";


/**
 * Instancia a matéria correta
 */
define("CODE_LAMPADA_REF", 4);
$materia = new Materia();
$materia->carregar(Materia::idXML_JS, CODE_LAMPADA_REF);
$materia->setNivel(Materia::BASICO);


/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";
?>
