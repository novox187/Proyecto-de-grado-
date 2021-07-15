<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style/contacto.css" />
    <link rel="stylesheet" href="style/style_nav_footer.css">
    <!-- BOOTSTRAP 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- ED GRID -->
    <link href="https://unpkg.com/ed-grid@3.0.0/src/css/ed-grid.min.css" rel="stylesheet">
    <!-- realeway -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,600&display=swap" rel="stylesheet">
    <!-- ICON -->
    <link rel="icon" href="img/escudo1.ico">
    <title>Contacto</title>
</head>

<body>
    <?php
    require "nav.php";
    ?>
    <div class="container">
        <h1 class="text-left">Contacta al Desarrollador</h1>
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <ul class="contact-form">
                        <li>
                            <div class="col-md-6">
                                <input name="nombre" placeholder="Escribe tu nombre" required="required" size="8" type="text" />
                            </div>

                            <div class="col-md-6">
                                <input name="email" placeholder="Email" required="required" size="8" type="email" />
                            </div>
                        </li>

                        <li>
                            <div class="col-md-6">
                                <input name="telefono" placeholder="Escribe tu numero" required="required" size="8" type="text" />
                            </div>

                            <div class="col-md-6">
                                <input name="asunto" placeholder="Asunto" required="required" size="8" type="text" />
                            </div>
                        </li>
                        <li>
                            <div class="col-md-12">
                                <textarea class="span12" name="mensaje" placeholder="En que te puedo Ayudar ?" required="required"></textarea>
                            </div>
                        </li>

                        <li>
                            <div class="col-md-12">
                                <button type="submit">
                    Enviar mensaje
                    <span
                      class="glyphicon glyphicon-arrow-right"
                      aria-hidden="true"
                    ></span>
                  </button>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <?php require "footer.php";?>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>