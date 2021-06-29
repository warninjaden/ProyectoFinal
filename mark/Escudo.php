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
            <h2>Escudo Medieval</h2>


            <img src="assets/img/shield.jpg" class="img-gondor">
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
                El escudo es un arma defensiva de protección contra armas ofensivas. Los escudos medievales forman parte de la historia bélica de todos los tiempos. Los bizantinos utilizaban principalmente el escudo de corte ovalado. Los normandos tenían el escudo en forma de almendra con la parte inferior en forma de punta que usaban para clavarlo en el suelo.

                A finales del siglo XIII y hasta el siglo XVI se usaba el escudo que tenía forma triangular equilátera.

                Los escudos medievales que conocemos en la actualidad tienen mayormente uso decorativo y van pintados con emblemas, escudos de armas, blasones e insignias de los ilustres guerreros históricos y sus familias, aunque siguen fabricándose piezas funcionales con cinchas para el brazo y que son usadas por recreacionistas.

            </p>

            <a href="carrito.php?id=<?php print 28?>" class="btn btn-success btn-block">
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
