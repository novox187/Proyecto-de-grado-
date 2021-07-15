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

    <title>ADMIN</title>
</head>

<body>
    
    <!-- NAVEGACION  -->
    <?php require "nav.admin.view.php" ?>
    <!-- Modificadores -->
    <div class="contenedor-master">
        <h1 class="titulo-panel">PANEL DE CONTROL / INICIO</h1>

        <?php foreach ($resultado_pc as $resultados_pc) { ?>

            <?php if ($resultados_pc['nombre'] == 'ARTICULOS') { ?>

                <div id="contenedor"  class="cont_art " >
                    <h1><?php echo $resultados_pc['nombre'] ?> <span class="icono"><i  class="fas fa-angle-down"></i></h1>

                    <div class="franja">
                    </div>
                    <ul id="articulos" class="cont_item" >
                        <a href="nuevo_card.php" class="btn_new_art">Nuevo Articulo</a>

                        <?php foreach ($resultado_art as $resultados_art) { ?>
                        <li><img src="../img/<?php echo $resultados_art['img']?>" alt="">
                            <h1 class="titulo_art"><b><?php echo $resultados_art['titulo'] ?></b> </h1>
                            <div class="capa_item">
                                <a href="editar_cards.php?id=<?php echo $resultados_art['id']?>">EDITAR</a>
                                <a href="../single.php?id=<?php echo $resultados_art['id'] ?>">VER</a>
                            </div>
                        </li>
                        <?php } ?>

                        <?php require "../paginacion.php"?>
                    </ul>
                </div>


            <?php } else if($resultados_pc['nombre'] == 'VISION - MISION') { ?>

            <?php }else {?>
                <figure class="banner">
                    <h1 class="titulo"><?php echo $resultados_pc['nombre'] ?></h1>
                    <div class="capa editar">
                        <a href="../admin/<?php echo $resultados_pc['link_editar'] ?>" class="boton-editar">EDITAR</a>
                        <a href="../admin/<?php echo $resultados_pc['link_nuevo'] ?>" class="boton-editar">NUEVO</a>
                    </div>
                </figure>
           <?php } ?>

        <?php } ?>
    </div>
    <?php require "../footer.php" ?>
    <script src="../admin/app.js"></script>
</body>


<?php require "../carga.main.php" ?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</html>