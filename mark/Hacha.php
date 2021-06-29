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
            <span class="icon-bars" id="btnmenu"></span>
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
            <h2>Hacha Medieval</h2>


            <img src="assets/img/hacha3.jpg" class="img-gondor">
            <?php
              require 'vendor/autoload.php';
              $arma = new Medieval\Arma;
              $info_armas = $arma->mostrar();
              $cantidad = count($info_armas);
              if($cantidad > 0){
                for($x =0; $x < $cantidad; $x++)
                  $item = $info_armas[$x];
              }
            ?>
            <p>El hacha de guerra es un arma de asta de hierro en forma de cuchilla, y su corte acerado, que en lo más angosto, que es el revés, tiene un anillo de hierro, por el cual entra el palo que sirve de astil.

                El hacha de guerra es la versión militar de las hachas comunes de cortar y talar. Se diferencia de las civiles en que suelen ser más ligeras y estilizadas -para blandirlas mejor-, o con una hoja de mayor filo que las comunes -para mayor efectividad-; por ello, esta categoría recoge todos los tipos de hachas de la historia, desde la Antigüedad hasta casi nuestro tiempo.

                Nos referimos, pues, a las armas de tajo a una mano -a dos manos, un hacha es denominada "larga" o "enastada", lo que en muchos casos las diferenciaba poco de cualquier arma de asta de todas las épocas y lugares, salvo las hachas especializadas o distintivas de pueblos como: las franciscas, la "danesa", etc. </p>


                <a href="carrito.php?id=<?php print 29?>" class="btn btn-success btn-block">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Comprar
                </a>

        </section>


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
    <script src="assets/js/Menu.js"></script>
</body></html>