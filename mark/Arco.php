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
            <h2>Arco Largo</h2>


            <img src="assets/img/arco.jpeg" class="img-gondor">
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

            <p>
                El arco largo (en inglés, Longbow) es un tipo de arco con una longitud casi igual a la altura de la persona que maneja, siguiendo el perfil de una línea casi recta o ligeramente curvada, con los brazos relativamente delgados, formando un arco de circunferencia o en forma como de una letra "D".
                El arco largo histórico fue un arco hecho de una sola pieza de madera natural, pero los arcos largos modernos también se pueden hacer con materiales modernos o pegando diferentes maderas. Este tipo de arco ha sido utilizado como arma para la caza, la guerra y la defensa, por muchas civilizaciones y culturas (por ejemplo en el Paleolítico o por los indios americanos). A título deportivo todavía se utiliza para la caza, en torneos o para la práctica de tiro puro.</p>


                <a href="carrito.php?id=<?php print 27 ?>" class="btn btn-success btn-block">
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
