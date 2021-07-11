<?php session_start();
require "config.php";
require "funciones.php";
comprobarSession();

$conexion = conexion($bd_config);

if (!$conexion) {
    header ('location:'.$RUTA.'/error.php');
}

ultimo_id($conexion, 'banner');

$datos = $conexion->query('SELECT * FROM banner WHERE id ='.ultimo_id($conexion, 'banner'));
$datos = $datos->fetchAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = limpiarDatos($_POST['titulo']);
    $contenido = $_POST['contenido'];
    $autor = limpiarDatos($_POST['autor']);
    $img = $_FILES['img'];
    $img_guardada = $_POST['img_guardada'];


if (empty($img['name'])) {
    $img = $img_guardada;
}else{

    $archivo_subido = '../img/'. $_FILES['img']['name'];

    move_uploaded_file($_FILES['img']['tmp_name'], $archivo_subido);

    $img = $_FILES['img']['name'];

}

    $editar = $conexion->prepare('UPDATE banner SET titulo = :titulo,
    contenido = :contenido, autor = :autor, img = :img WHERE id = :id');
    $editar->execute(array(
    ':titulo' => $titulo,
    ':contenido' => $contenido,
    ':autor' => $autor,
    ':img' => $img,
    ':id' => ultimo_id($conexion,'banner')
    ));

    header ('location:'.$RUTA.'/admin/index.php');
}

require "../view/editar_banner.view.php"

?>