<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style/institucion.css">
    <link rel="stylesheet" href="style/style_nav_footer.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <!-- BOOTSTRAP 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- ED GRID -->
    <link href="https://unpkg.com/ed-grid@3.0.0/src/css/ed-grid.min.css" rel="stylesheet">

    <!-- raleway -->
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
    require "nav.php";
    ?>



    <!-- MISION VISION -->
    <?php foreach ($resultado_vm as $resultados) { ?>
        <section id="mision_vision" class="section-2">
            <div class="cont-myv">
                <div id="vision" class="vision c-a ">
                    <div class="titulo-myv t-v ">
                        <h1><b>VISIÓN</b></h1>
                        <i id="i-vision" class="fas fa-chevron-circle-down i-v"></i>
                    </div>
                    <div class="contenido-myv c-v ">
                        <p><?php echo $resultados['vision']; ?></p>
                        <img src="img/vision.png" alt="img.Vision" class="img_vision" />
                    </div>
                </div>
                <div id="mision" class="mision c-a  ">
                    <div class="titulo-myv t-m">
                        <h1><b>MISIÓN </b></h1>
                        <i id="i-mision" class="fas fa-chevron-circle-down i-m"></i>
                    </div>
                    <div class="contenido-myv c-m">
                        <p><?php echo $resultados['mision']; ?></p>
                        <img src="img/mision.png" alt="img.mision" class="img_mision" />
                    </div>
                </div>
            </div>
        <?php } ?>
        </section>


        <?php require "footer.php";?>

        <script>
            const encogerV = document.querySelector('.t-v');

            encogerV.addEventListener('click', function() {

                document.getElementById('vision').classList.toggle('encoger');
                document.getElementById('i-vision').classList.toggle('i-v');
            })

            const encogerM = document.querySelector('.t-m');

            encogerM.addEventListener('click', function() {

                document.getElementById('mision').classList.toggle('encoger');
                document.getElementById('i-mision').classList.toggle('i-m');
            })
        </script>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</html>