
<?php
require 'admin/funciones.php';
require 'admin/config.php';
$conexion = conexion($bd_config);

$id_articulos =  id_articulo($_GET['id']);

if (empty($id_articulos)) {
    header('Location: index.php');
}
$post = obtener_post_por_id($conexion, $id_articulos);

if (!$post) {
    header ('location: index.php');
}

$post = $post[0];

require 'view/single.view.php';
?>