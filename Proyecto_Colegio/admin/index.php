<?php session_start();

require 'config.php';
require 'funciones.php';
comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion) {
    header ('location: error.php');
}

$resultado_pc = $conexion->query("SELECT * FROM panel_control WHERE seccion = 'INICIO'");
$resultado_pc = $resultado_pc->fetchAll();

$ultimo_id = ultimo_id($conexion, 'cards');
$ultimo_id = $ultimo_id - 3;

$resultado_art = $conexion->query("SELECT * FROM cards LIMIT $ultimo_id,3");
$resultado_art = $resultado_art->fetchAll();
require '../view/pc.view.php';



?>