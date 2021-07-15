<?php session_start();
require "config.php";
require "funciones.php";
comprobarSession();



$conexion = conexion($bd_config);

if (!$conexion) {
    header ('location:../error.php');
}
ultimo_id($conexion, 'mision_vision');
/* TARER DATOS DE M Y V  */
$datos = $conexion->query('SELECT * FROM mision_vision WHERE id ='.ultimo_id($conexion, 'mision_vision'));
$datos = $datos->fetchAll();

/* ACTUALIZAR DATOS DE M Y V */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vision = $_POST['vision'];
    $mision = $_POST['mision'];

    $subir = $conexion->prepare('UPDATE mision_vision SET mision = :mision, vision = :vision WHERE id = :id');
    $subir->execute(array(
    ':mision' => $mision,
    ':vision' => $vision,
    ':id' => ultimo_id($conexion, 'mision_vision')
    ));

header ('location:'.$RUTA.'/admin');
}

require "../view/editar_myv.view.php";
?>