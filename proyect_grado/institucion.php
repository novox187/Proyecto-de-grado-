<?php

require 'admin/config.php';
require 'admin/funciones.php';

$conexion = conexion($bd_config);
if (!$conexion) {
    header('location: error.php');
}


$resultado_vm = $conexion->query("SELECT * FROM mision_vision WHERE id =".ultimo_id($conexion,'mision_vision'));
$resultado_vm = $resultado_vm->fetchAll();

require "view/institucion.view.php"
?>