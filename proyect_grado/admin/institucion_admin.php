<?php
session_start();

require 'config.php';
require 'funciones.php';
comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion) {
    header ('location: error.php');
}

$resultado_pc = $conexion->query("SELECT * FROM panel_control WHERE seccion = 'INICIO'");
$resultado_pc = $resultado_pc->fetchAll();

require "../view/institucion_admin.view.php";
?>