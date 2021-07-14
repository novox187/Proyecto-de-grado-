<?php
require "admin/config.php";
require "admin/funciones.php";

$conexion = conexion($bd_config);
if (!$conexion) {
    header('location: error.php');
}

$datos = $conexion->query('SELECT * FROM autoridades');
$datos = $datos->fetchAll();


require "view/autoridades.view.php";
?>