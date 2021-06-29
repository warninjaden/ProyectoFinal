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
        <link rel="stylesheet" href="assets/CSS/Estilos_Nosotros.css">
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
            <h2>Equipo de Desarrollo</h2>
            
            <section class="group our-team">
                
                <div class="container container__flex">
                    <div class="column column--33">
                        <h3 class="our-team__title">Alejandro</h3>
                        <img src="assets/img/Nolasco.jpg" alt="" class="our-team__img img-gondor" >
                        <p class="our-team__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat aspernatur omnis ad quasi sapiente, aliquam vero, blanditiis adipisci odio. Consectetur possimus impedit voluptas ea debitis, eius illum culpa aliquam doloremque!</p>
                    </div>
                    <div class="column column--33">
                        <h3 class="our-team__title">Brayan</h3>
                        <img src="assets/img/Brayan.jpg" alt="" class="our-team__img img-gondor">
                        <p class="our-team__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt atque voluptatibus earum vel natus magni voluptate quidem, omnis! Nostrum a doloribus dolore ea minus velit sapiente tempore dolorum rem est.</p>
                    </div>
                    <div class="column column--33">
                        <h3 class="our-team__title">Luis</h3>
                        <img src="assets/img/Luis.jpg" alt="" class="our-team__img img-gondor">
                        <p class="our-team__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem ipsa eius tempore, commodi dignissimos consectetur nulla nihil voluptas eaque, provident officia, suscipit temporibus inventore et placeat pariatur, eum architecto dicta.</p>
                    </div>
                    <div class="column column--33">
                        <h3 class="our-team__title">warden</h3>
                        <img src="assets/img/Warden.jpg" alt="" class="our-team__img img-gondor">
                        <p class="our-team__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam atque, molestiae vitae! Ipsa vero vel in! Sapiente quisquam, nulla corrupti nam totam eligendi ex, ducimus provident adipisci molestiae debitis, fugit?</p>
                    </div>
                    <div class="column column--33">
                        <h3 class="our-team__title">Jorge</h3>
                        <img src="assets/img/Jorge.jpg" alt="" class="our-team__img img-gondor">
                        <p class="our-team__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime aperiam quam explicabo corrupti hic ducimus non alias totam qui porro, molestias mollitia deleniti! Cupiditate ab est harum nemo deleniti, expedita.</p>
                    </div>
                </div>
                
                
                
            </section>
            
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
