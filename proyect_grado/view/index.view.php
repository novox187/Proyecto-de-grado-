<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style/style_nav_footer2.css">
    <link rel="stylesheet" href="style2.css">
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

<?php require  "whatsapp.php" ?>

<!-- COMENTARIOS DE FACEBOOK 
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v11.0" nonce="sMhGEV1A"></script> 
-->
<div class="color_fondo">



    <?php
    
    require "nav.php";
    ?>

    <div class="contenedor_madre">
        <!-- INDICE -->
        <div class="container_indice">

            <div class="indice indice_banner"><a href="#banner"><i class="fas fa-book-open"></i></a></div>

            <div class="indice indice_cards"><a href="#cards"><i class="fas fa-ad"></i></a></div>

            <div class="indice indice_social"><a href="#ubicacion"><i class="fas fa-map-marked-alt"></i></a></div>

            <div class="indice indice_ubicacion"><a href="#comentarios"><i class="fas fa-hashtag"></i></a></div>
        </div>

        <!-- BANNER -->
        <?php foreach ($resultado_banner as $resultados) { ?>
            <section id="banner" class="l-section s-py-4">
                <!-- Separación del contenido en columnas -->
                <div class="ed-grid lg-grid-2 row-gap s-gap-2 m-gap-4">
                    <!-- Contenido de la columna 1 -->
                    <div class="s-column s-main-center lg-main-start lg-cross-start s-center lg-left">
                        <h1 class="titulo_b"><?php echo $resultados['titulo']; ?> <span class="inf fecha"><?php echo fecha($resultados['fecha']) ?></span></h1>

                        <p><?php echo $resultados['contenido']; ?> <br><span style="color:#bbbdbc;" class="inf autor"><b>Autor: </b><?php echo $resultados['autor'] ?></span></p>
                    </div>
                    <!-- Contenido de la columna 2 -->
                    <div>
                        <div class="img-container s-ratio-16-9">
                            <img class="s-radius-1" src="img/<?php echo $resultados['img']; ?>">
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>

        <!-- CARDS -->
        <section id="cards" class="cards">
            <div class="container_span">
                <span class="span_cards">
                    ENTERATE DE LO QUE SUCEDE EN LA INSTITUCION
                </span>
            </div>
            <?php foreach ($resultado_cards as $resultados) { ?>
                <article class="s-shadow-bottom dd">
                    <!--Contenedor de la imagen-->
                    <div class="s-ratio-16-9 img-container s-radius-tl s-radius-tr">
                        <img src="img/<?php echo $resultados['img']; ?>">
                    </div>
                    <!--Contenido-->
                    <div class="s-pxy-2">
                        <h3 class="titulo-c"><?php echo  $resultados['titulo']; ?><br> </h3><span class="inf fecha"><?php echo fecha($resultados['fecha']) ?></span>

                        <p class="s-mb-0"><?php echo $resultados['estracto']; ?> <br><span class="inf autor"><b>Autor: </b><?php echo $resultados['autor'] ?></span></p>
                    </div>
                    <div class="franja">
                    </div>
                    <div class="capa_leer">
                        <h2><a href="single.php?id=<?php echo $resultados['id'] ?>">Seguir <br> leyendo</a></h2>
                    </div>
                </article>
            <?php } ?>

        </section>


            <!-- UBICACION -->
            <section id="ubicacion" class="ubicacion">
                <div class="contenido_ubicacion">
                    <h1 class="titulo_ubicacion"><b>UBICACION <i class="fas fa-map-marker-alt"></i></b> </h1>
                    <p class="p_ubicacion"><b>Barrio:</b> Las Américas <b>Calles:</b> Quito y Auca Francisco de Orellana – Ecuador </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6941695309006!2d-76.99548809963458!3d-0.4507966559429567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d7a545a0d906e7%3A0x6a4e06d918e05e0d!2sColegio%20Napo!5e0!3m2!1sen!2sec!4v1621430708004!5m2!1sen!2sec" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


                </div>
            </section>

            <!-- COMENTARIOS -->
            <section id="comentarios">
                <div class="contenedor_comentarios">
                    <div class="fb-comments" data-href="http://fdo.rf.gd/index.php" data-width="100%" data-numposts="5"></div>
                </div>
            </section>

    </div>
    
    <?php require  "footer.php" ?>
    </div>

</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</html>




<!-- francisco-de-orellana.rf.gd -->
<!-- epiz_27995497! -->
<!-- erty3216 -->