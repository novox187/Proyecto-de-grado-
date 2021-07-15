<?php
require "funciones.php";
require "config.php";

$conexion = conexion($bd_config);

if (!$conexion) {
    header ('location: ../error.php');
}
/* TRAER CARDS DE LA BASE DE DATOS */
$ultimo_id = ultimo_id($conexion, 'cards');
$ultimo_id = $ultimo_id - 3;

$id_articulos =  id_articulo($_GET['id']);


$resultado_art = $conexion->query("SELECT * FROM cards WHERE id = $id_articulos");
$resultado_art = $resultado_art->fetchAll();

/* ACTUALIZAR CARDS */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = limpiarDatos($_POST['titulo']);
    $estracto = $_POST['estracto'];
    $contenido = $_POST['contenido'];
    $autor = limpiarDatos($_POST['autor']);
    $img = $_FILES['img'];
    $img_guardada = $_POST['img_guardada'];
    $id =  id_articulo($_POST['id']);


if (empty($img['name'])) {
    $img = $img_guardada;
}else{

    $archivo_subido = '../img/'. $_FILES['img']['name'];

    move_uploaded_file($_FILES['img']['tmp_name'], $archivo_subido);
    $img = $_FILES['img']['name'];

}

    $editar = $conexion->prepare('UPDATE cards SET titulo = :titulo, estracto = :estracto, contenido = :contenido, autor = :autor, img = :img WHERE id = :id ');
    $editar->execute(array(
    ':titulo' => $titulo,
    ':estracto' => $estracto,
    ':contenido' => $contenido,
    ':autor' => $autor,
    ':img' => $img,
    ':id' => $id
    ));

    header ('location:'.$RUTA.'/admin/index.php');
}
require "../view/editar_cards.view.php";
?>