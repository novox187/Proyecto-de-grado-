<?php
require 'admin/config.php';
require 'admin/funciones.php';

$conexion = conexion($bd_config);
if (!$conexion) {
    header('location: error.php');
}
$resultado_banner = $conexion->query("SELECT * FROM banner WHERE id = ".ultimo_id($conexion,'banner'));
$resultado_banner = $resultado_banner->fetchAll();

$ultimo_id = ultimo_id($conexion, 'cards');
$ultimo_id = $ultimo_id - 3;


$resultado_cards = $conexion->query("SELECT * FROM cards limit $ultimo_id , 3");
$resultado_cards = $resultado_cards->fetchAll();




require 'view/index.view.php';
