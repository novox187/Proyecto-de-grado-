<?php
require "funciones.php";
require "config.php";

$conexion = conexion($bd_config);

if (!$conexion) {
    header ('location:'.$RUTA.'/error.php');
}
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $titulo = limpiarDatos( $_POST['titulo']);
        $estracto = limpiarDatos($_POST['estracto']);
        $contenido = $_POST['contenido'];
        $autor = $_POST['autor'];
        $img = $_FILES['img']['tmp_name'];

        $archivo_subido = '../img/'. $_FILES['img']['name'];

        move_uploaded_file($img, $archivo_subido);

        $subir = $conexion->prepare('INSERT INTO cards (id, titulo, estracto, img, contenido, autor) VALUES (null, :titulo, :estracto, :img, :contenido, :autor)');

        $subir->execute(array(
        ':titulo' => $titulo,
        ':estracto' => $estracto,
        ':img' => $_FILES['img']['name'],
        ':contenido' => $contenido,
        ':autor' => $autor
        ));

        header ('location:'.$RUTA.'/admin');
    }



require "../view/nuevo_card.view.php";
