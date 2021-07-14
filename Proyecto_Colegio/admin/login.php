<?php session_start();
require 'config.php';


if($_SERVER['REQUEST_METHOD'] =='POST'){
    $usuario = filter_var(Strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
    $password = $_POST['password'];

    if($usuario == $admin['usuario'] && $password == $admin['password'] ){
    $_SESSION['admin'] = $admin['usuario'];
    header('location:'. $RUTA .'/admin');
}else{
    echo "El usuario o contraseña son incorrectos";
}

}





require '../view/login.view.php';

?>