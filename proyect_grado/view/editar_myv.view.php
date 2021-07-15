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
    <title>EDITAR MISION Y VISION</title>
</head>

<body>
<?php require "nav.admin.view.php" ?>
    <div class="contenedor_form">
        <div class="post">
            <article>
                <h2 class="titulo">Editar Articulo</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario" enctype="multipart/form-data" method="post">
                <?php foreach ($datos as $resultado) {?>
                    <label for="mision"><h3>Misión</h3></label>
                    <textarea id="txt" name="mision" placeholder="INGRESE MISION"  required><?php echo $resultado['mision'] ?></textarea>
                    <label for="vision"><h3>Visión</h3></label>
                    <textarea id="txt" name="vision" placeholder="INSGRESE VISION"  required><?php echo $resultado['vision'] ?></textarea>
                <?php }?>
                    <input type="submit" value="EDITAR">
                </form>
                </div>
            </article>
        </div>
    </div>

    <?php require "../footer.php" ?>

</body>
</html>