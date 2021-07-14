<?php session_start();
require "config.php";
require "funciones.php";
comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion) {
    header ('location:../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mision = $_POST['mision'];
    $vision = $_POST['vision'];

    $subir = $conexion->prepare('INSERT INTO mision_vision (id, mision, vision) VALUES (NULL, :mision, :vision)');
    $subir->execute(array(
        ':mision' => $mision,
        ':vision' => $vision
    ));

    header ('location:'.$RUTA.'/admin');
}

require "../view/nuevo_myv.view.php";
?>