<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style/docentes2.css">
    <link rel="stylesheet" href="style/style_nav_footer.css">
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
    <title>Docentes</title>
</head>

<body>
    <?php require "nav.php" ?>
    <div class="cont-master">

        <div id="docentes_tecnico" class="docentes_tecnico_inf">
            <h1 class="titulo-docentes">DOCENTES TECNICO INFORMATICA <span id="i-docentes"><i class="fas fa-chevron-circle-down"></i></span></h1>


            <div class="cont-docentes">
                <?php foreach ($datos as $dato) { ?>
                    <div class="cont-docente">
                        <div class="img-docente">
                            <?php if ($dato['img'] === null) { ?>
                                <img src="img/user.jpg" alt="foto del docente">
                            <?php  } else { ?>
                                <img src="<?php echo $dato['img']; ?>" alt="foto del docente">
                            <?php } ?>

                            <h5 class="nom-docente h-docente"><?php echo $dato['titulacion']  . "." . $dato['nombres_apellidos'] ?></h5>
                        </div>
                        <div class="inf-docente">
                            <h5 class="titulo-docente h-docente">Titulo:</h5>
                            <p class="text"><?php echo $dato['titulo'] ?></p>
                            <h5 class="h-docente">Especialidad:</h5>
                            <p class="text"><?php echo $dato['especialidad'] ?></p>
                            <h5 class="asignatura-docente h-docente">Asignatura:</h5>
                            <p class="text"><?php echo $dato['asignatura'] ?></p>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <?php require "footer.php" ?>
</body>
<script>
    const d_t_i = document.querySelector('.titulo-docentes');

    d_t_i.addEventListener('click', function() {

document.getElementById('docentes_tecnico').classList.toggle('encoger');
document.getElementById('i-docentes').classList.toggle('rotar');

})
    
</script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>