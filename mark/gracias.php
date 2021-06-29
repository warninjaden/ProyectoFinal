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
                </nav>
            </div>
            <h1>Venta de armas medievales</h1>
        </div>
    </header>

    <nav class="main-nav">
        <div class="container container__flex">
            <span class="icon-bars" id="btnmenu"></span>
            <ul class="menu" id="menu">
                <li class="menu__item"><a href="principal.php" class="menu__link">Inicio</a></li>
                <li class="menu__item"><a href="tienda.php" class="menu__link">Tienda</a></li>
                <li class="menu__item"><a href="Nosotros.php" class="menu__link">Nosotros</a></li>
                <li class="menu__item"><a href="Contacto.php" class="menu__link">Contacto</a></li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="contenedor" id="main" >
        <div class="row">
            <div class="jumbotron">
            <p style="margin-left:5rem">Gracias por su preferencia</p>
            <p>
            <a href="principal.php" style="margin-left:5rem">Regresar</a>
            </p>
            
            </div>
        </div>
      
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

  </body>
</html>