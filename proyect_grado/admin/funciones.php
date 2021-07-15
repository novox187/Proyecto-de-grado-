<?php
function conexion($bd_config){
	try {
	$conexion = new PDO('mysql:host=sql301.epizy.com;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conexion;

	} catch (PDOException $e) {
		return false;
	}
}

function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}

function comprobarSession(){
	if (!isset($_SESSION['admin'])) {
		header ('location: https://fdo.rf.gd/ ');
	}
}

function id_articulo($id){
	return (int)limpiarDatos($id);
}

function fecha($fecha){
	$timestamp = strtotime($fecha);
	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

	$dia = date('d', $timestamp);

	// -1 porque los meses en la funcion date empiezan desde el 1
	$mes = date('m', $timestamp) - 1;
	$year = date('Y', $timestamp);

	$fecha = $dia . ' de ' . $meses[$mes] . ' del ' . $year;
	return $fecha;
}

function obtener_post_por_id($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM cards WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}


function pagina_actual(){
	return isset($_GET['p']) ? (int)$_GET['p']: 1; 
}



function ultimo_id($conexion, $tabla)
{
    $ultimo_id = $conexion->query("SELECT * FROM $tabla");
    $ultimo_id = $ultimo_id->fetchAll();

    $id_mayor = 0;

    foreach ($ultimo_id as $resultado) {
        $id = $resultado['id'];
        if ($id_mayor < $id) {
            $id_mayor = $id;
        }
    }

    return  $id_mayor;
}

function numero_paginas($post_por_pagina, $conexion){
	//4.- Calculamos el numero de filas / articulos que nos devuelve nuestra consulta
	$total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_post->execute();
	$total_post = $total_post->fetch()['total'];

	//5. Calculamos el numero de paginas que habra en la paginacion
	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}



?>