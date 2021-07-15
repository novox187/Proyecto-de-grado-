<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style/style_nav_footer2.css">
    <link rel="stylesheet" href="style2.css"> 
    <link rel="stylesheet" href="style/single.css">
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

    <!-- FONT Pangolin -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">

    <!-- ICON -->
    <link rel="icon" href="img/escudo1.ico">
    <title>U.E Puerto Francisco de Orellana</title>

</head>
<body>
    
    <?php 
    require 'nav.php';
    require 'carga.php';
    ?>
    <div class="container_madre">

   
    <div class="container_s">
        <h1 class="titulo_s"><b><?php echo $post['titulo']?></b> <span class="fecha_s"><?php echo fecha($post['fecha'])?></span></h1>

        <img src="img/<?php echo $post['img']?>" class="img_s">
        <p class="texto_s"><?php echo $post['contenido']?></p> <span>Autor: <?php echo $post['autor']?></span>
    </div>
    </div>
    <?php require 'footer.php'?>
</body>
<?php require 'carga.main.php'?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>