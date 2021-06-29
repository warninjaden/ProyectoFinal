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

            <h2>Espada Larga</h2>


            <img src="assets/img/longsword.jpeg" loading="lazy" alt="Espada larga" class="img-gondor">
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
            <p>Las espadas largas o montantes son un desarrollo natural desde las llamadas espadas medievales europeas -derivadas de las espadas nórdicas- las cuales eran blandidas a una sola mano, más anchas sobre todo en su primer tercio y con cruz más corta. Fueron, como muchas veces a lo largo de la historia, las armas defensivas (ej. armaduras) las que influyeron en el desarrollo de armas más capaces de superar tales defensas. Por ello, la espada clásica de caballero altomedieval comienza a estilizarse y alargarse, incluso haciéndose más puntiaguda para así conseguir mayor capacidad de daño y/o versatibilidad. Uno de estos desarrollos -el que nos ocupa- es el de la espada larga.

                Aunque, como en muchas ocasiones, un arma o restos arqueológicos de ellas aparezcan muchos años o lustros antes de las fechas que dan los historiadores como dados para esas armas, es su uso extendido y su generalización el que nos da las fechas durante las que perduró. Por ello estos tipos de espadas, más largas que sus antecesoras, se dice que comenzaron a emplearse allá por el siglo XIII o XIV, y dejaron de estar en "gracia" -comenzó su desuso- en el siglo XVII. </p>


                <a href="carrito.php?id=<?php print 26?>" class="btn btn-success btn-block">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Comprar
                </a>

        </section>


    </main>


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