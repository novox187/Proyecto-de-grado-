<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <!-- ICON -->
    <link rel="icon" href="../img/escudo1.ico">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <!-- CSS -->
	<link rel="stylesheet" href="../admin/style-login.css">
	<title>Iniciar Sesión</title>
</head>
<body>
    <?php require "../admin/config.php"?>
	<div class="contenedor">
    <h1 class="titulo">Iniciar Sesión</h1>
         <center><img src="../img/escudo1.png" alt="Escudo" ></center>
		
		<hr class="border">

		<form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input class="usuario" type="text" name="usuario" placeholder="Usuario">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input class="password_btn" type="password" name="password" placeholder="Password">
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>
			
		</form>

		<p class="texto-registrate">
			Solo Personal Autorizado <br> <i class="fas fa-hand-paper"></i> <br>
            ¿no eres admin ?
			<a href="<?php echo $RUTA ?>">Regrese al inicio</a>
		</p>

	</div>
</body>
</html>