<div class="menu">

    <header>
        <?php require "../admin/config.php" ?>
        <nav>


            <div class="logo"><img src="img/escudo1.png" alt="escudo del colegio " class="escudo"><span> U.E <br> Pruerto Fransisco <br> de Orellana </span>
            </div>

            <div class="links">

                <a href="<?php echo $RUTA ?>/admin" class="animation navbar-brand">Inicio</a>
                <a href="../admin/institucion_admin.php" class="animation navbar-brand">Institucion</a>
                <a href="#" class="animation navbar-brand">Educacion Basica</a>


                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Bachillerato
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item sub-titulo-bach" href="#">Ciencias</a></li>
                    <li><a class="dropdown-item sub-titulo-bach" href="#">Tecnico</a></li>
                </ul>

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Docentes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item sub-titulo-docente" href="#">Autoridades</a></li>
                    <li><a class="dropdown-item sub-titulo-docente" href="#">Docentes</a></li>
                </ul>

                <a class="btn btn-success" href="cerrar.php" role="button">Cerrar secion</a>


                <!--
                <a>Siguenos En:</a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a> -->

            </div>


        </nav>
    </header>
</div>