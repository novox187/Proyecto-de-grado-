<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css 1 -->
    <!-- <link rel="stylesheet" href="../style.css"> -->
    <!-- CSS Admin -->
    <link rel="stylesheet" href="../admin/style-admin.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <!-- BOOTSTRAP 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- ED GRID -->
    <link href="https://unpkg.com/ed-grid@3.0.0/src/css/ed-grid.min.css" rel="stylesheet">

 <!-- Raleway -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,600&display=swap" rel="stylesheet">

    <!-- FONT Anton -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="icon" href="../img/escudo1.ico">

    <title>ADMIN_INSTITUCION</title>
</head>

<body>
<?php require "../carga.php" ?>
    <!-- NAVEGACION  -->
    <?php require "nav.admin.view.php" ?>
    <!-- Modificadores -->
    <div class="contenedor-master">
    <?php foreach ($resultado_pc as $resultado) {?>
        <?php if ($resultado['nombre'] == 'VISION - MISION') {?>
            <figure class="banner">
                    <h1 class="titulo"><?php echo $resultado['nombre'] ?></h1>
                    <div class="capa editar">
                        <a href="../admin/<?php echo $resultado['link_editar'] ?>" class="boton-editar">EDITAR</a>
                        <a href="../admin/<?php echo $resultado['link_nuevo'] ?>" class="boton-editar">NUEVO</a>
                    </div>
                </figure>
        <?php } ?>
  <?php  } ?>
    </div>

    <?php require "../footer.php"; ?>
</body>
</html>