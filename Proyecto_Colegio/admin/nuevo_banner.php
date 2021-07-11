<?php session_start();

require "funciones.php";
require "config.php";

$conexion = conexion($bd_config);

if (!$conexion) {
    header ('locataion: ../error.php');
}

/* SUBIR DATOS A LA BASE DE DATOS */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo =  limpiarDatos($_POST['titulo']);
    $contenido= $_POST['texto'];
    $img = $_FILES['img']['tmp_name'];
    $autor = $_POST['autor'];


    $archivo_subido = '../img/'. $_FILES['img']['name'];

    move_uploaded_file($img, $archivo_subido);

    $statement = $conexion->prepare('INSERT INTO banner (id, titulo, contenido, img, autor) VALUES (null, :titulo, :contenido, :img, :autor )');

    $statement->execute(array(
    ':titulo' => $titulo,
    ':contenido' => $contenido,
    ':img' => $_FILES['img']['name'],
    ':autor' => $autor
    ));
    header ('location:'.$RUTA.'/admin');
}
require '../view/nuevo_banner.view.php' ?>
