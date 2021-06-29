<?php
    session_start();
    require 'funciones.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Medieval Online</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
<header class="header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="principal.php">
                    <img src="assets/img/medieval.png" alt="Espadas cruzadas">
                </a>
                <nav class="navegacion">
                    <a class="btn" href="panel/index.php">
                        Login
                    </a>
                    <a href="carrito.php" class="btn">CARRITO <span class="badge"><?php print cantidadArticulos();?></span></a>
                </nav>
            </div>
            <h1>Venta de armas medievales</h1>
        </div>
    </header>

    <nav class="main-nav">
        <div class="container container__flex">
            <span class="icon-bars" id="btnmenu" style="color:white"></span>
            <ul class="menu" id="menu">
                <li class="menu__item"><a href="principal.php" class="menu__link">Inicio</a></li>
                <li class="menu__item"><a href="tienda.php" class="menu__link">Tienda</a></li>
                <li class="menu__item"><a href="Nosotros.php" class="menu__link">Nosotros</a></li>
                <li class="menu__item"><a href="Contacto.php" class="menu__link">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <main class="seccion contenedor">
        <section>
        <h2>Los más vendidos</h2>
        <div class="contenedor-anuncio">
            <div class="anuncio">
                <picture>
                    <img src="assets/img/longsword.jpeg" loading="lazy" alt="Espada larga">
                    <h3>Espada Larga</h3>
                    <p>Espada larga medieval decorativa. No dejar al alcance de los niños.</p>
                </picture>
                <a href="Espada.php" class="boton boton-medieval">Ver artículo</a>
            </div>
            <div class="anuncio">
                <picture>
                    <img src="assets/img/shield.jpg" loading="lazy" alt="Escudo Medieval">
                    <h3>Escudo Medieval</h3>
                    <p>Espada larga medieval hecho de metal. No dejar al alcance de los niños.</p>
                </picture>
                <a href="Escudo.php" class="boton boton-medieval">Ver artículo</a>
            </div>
            <div class="anuncio">
                <picture>
                    <img src="assets/img/hacha3.jpg" loading="lazy" alt="Hacha medieval">
                    <h3>Hacha Medieval</h3>
                    <p>Espada larga medieval decorativa. No dejar al alcance de los niños.</p>
                </picture>
                <a href="Hacha.php" class="boton boton-medieval">Ver artículo</a>
            </div>
            <div class="anuncio">
                <picture>
                    <img src="assets/img/arco.jpeg" loading="lazy" alt="Hacha medieval">
                    <h3>Arco Largo</h3>
                    <p>Arco largo decorativo de madera. No dejar al alcance de los niños.</p>
                </picture>
                <a href="Arco.php" class="boton boton-medieval">Ver artículo</a>
            </div>
        </div>
        <a class="boton-medieval" href="tienda.php">Ver todas</a>
        </section>

        <section class="festival-imagen">
            <h2>Haz tu registro al FEST Camelot 2022</h2>
            <p>Divertete con nosotros en este evento de otro mundo</p>
            <span style="background-color:black">Próximamente</span>
        </section>


        <h2>Más sobre nuestro servicio</h2>
        <div class="iconos-nosotros">
                <div class="icono">
                    <img src="assets/img/espada.png" alt= "espadas" loading="lazy">
                    <h3>Calidad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sint neque beatae, voluptate perferendis error consequatur facilis asperiores, impedit sunt quis aliquam, 
                        soluta repellendus illo. Excepturi exercitationem odit architecto voluptatibus?</p>
            </div>


            <div class="icono">
                <img src="assets/img/mundo.png" alt= "mundo" loading="lazy">
                <h3>Mundial</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sint neque beatae, voluptate perferendis error consequatur facilis asperiores, impedit sunt quis aliquam, 
                    soluta repellendus illo. Excepturi exercitationem odit architecto voluptatibus?</p>
            </div>


            <div class="icono">
                <img src="assets/img/proteger.png" alt= "seguridad" loading="lazy">
                <h3>Seguro</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sint neque beatae, voluptate perferendis error consequatur facilis asperiores, impedit sunt quis aliquam, 
                    soluta repellendus illo. Excepturi exercitationem odit architecto voluptatibus?</p>
            </div>
        </div>

    </main>
    </div> <!-- /container -->
    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="Nosotros.php">
                    Nosotros
                </a>
                <a href="tienda.php">
                    Tienda
                </a>
                <a href="Contacto.php">
                    Contacto
                </a>
                <a href="panel/index.php">
                    Login
                </a>
            </nav>
        </div>
        <p class="copyright">Todos los derechos Reservados 2021 &copy;</p>
    </footer>
    <script src="build/js/bundle.js.min.map"></script>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/Menu.js"></script>

  </body>
</html>
