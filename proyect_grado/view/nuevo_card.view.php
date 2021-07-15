<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../admin/style-admin.css">
    <link rel="stylesheet" href="../style/form.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <!-- BOOTSTRAP 4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- ED GRID -->
    <link href="https://unpkg.com/ed-grid@3.0.0/src/css/ed-grid.min.css" rel="stylesheet">

    <!-- FONT LEXEND DECA -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">

    <!-- FONT Anton -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <!-- ICON -->
    <link rel="icon" href="img/escudo1.ico">
    <title>Nuevo Articulo</title>
</head>

<body onload="contadorCaracteres()">
<?php require "nav.admin.view.php" ?>
    <div class="contenedor_form">
        <div class="post">
            <article>
                <h2 class="titulo">Nuevo Articulo</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario" enctype="multipart/form-data" method="post">
                    <input type="text" name="titulo" placeholder="Ingresa Un Titulo" maxlength="50" required>
                    <textarea id="txt" name="estracto" placeholder="INGRESA EL ESTRACTO
recuerda que tienes un maximo de 400 caracteres" maxlength="400" required></textarea>
                    <textarea id="txt" name="contenido" placeholder="INSGRESA EL CONTENIDO"  required></textarea>
                    <input type="text" name="autor" placeholder="Ingrese su nombre"  required>
                    <input type="file" name="img" required>
                    <input type="submit" value="Crear Articulo">
                </form>
                <div id="txtVista" class="contador">
                </div>
            </article>
        </div>
    </div>

    <?php require "../footer.php" ?>

    <script>
    function getID(id) {
        return document.getElementById(id).value;
    }

    function innerHTML(id, texto, resultado) {
        return document.getElementById(id).innerHTML = texto + resultado;
    }

    function contadorCaracteres(id, ) {
        setInterval(function() {
            var c = getID("txt");
            if (c.length > 400) {
                innerHTML("txtVista", "Solo esta permitido 400 caracteres");
            } else {
                innerHTML("txtVista", "numero de caracteres - ", c.length);
            }
        }, 0000);
    }
</script>
</body>
</html>