<?php

    session_start();
    require "funciones.php";
    
    if(isset($_GET["id"]) && is_numeric($_GET["id"])){
        $id = $_GET["id"];
        require "vendor/autoload.php";
        $arma = new Medieval\Arma;
        $resultado = $arma->mostrarPorId($id);


        if(!$resultado){
            header("location: tienda.php");
        }

        if(isset($_SESSION['carrito'])){
            if(array_key_exists($id,$_SESSION['carrito'])){
                actualizarArticulo($id);
            }else{
                agregarArticulo($resultado,$id);  
            }
        }
        else{
            agregarArticulo($resultado,$id);
        }

    }


    require "vendor/autoload.php";

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

    <div class="contenedor" id="main">
    <table class="table table-bordered table-hover">
       <thead>
             <tr>
                <td>#</td>
                <td>Artículo</td>
                <td>Foto</td>
                <td>Precio</td>
                <td>Cantidad</td>
                <td>Total</td>
                <td></td>
             </tr>
       </thead>
             <tbody>
                <?php

                    if(isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])){
                        $c=0;
                        foreach($_SESSION['carrito'] as $indice => $value){
                            $c++;
                            $total = $value['precio'] *$value['cantidad'];
                ?>
                <br>
                    <tr>
                      <form action="actualizar_carrito.php" method="post">
                        <td><?php print $c ?></td>
                        <td><?php print $value['titulo'] ?></td>
                        <td>
                            <?php
                            $foto = 'upload/'.$value['foto'];
                            if(file_exists($foto)){
                            ?>
                            <img src="<?php print $foto; ?>" class="img-gondor">
                            <?php }else{?>
                            <img src="assets/imagenes/not-found.jpg" class="img-gondor">
                            <?php }?>
                            </td>
                            <td><?php print $value['precio'] ?></td>
                            <td><?php print $value['titulo'] ?></td>
                            <td>
                            <input type="hidden" name="id" value="<?php print
                            $value['id']?>">  
                            <input type="text" name="cantidad" class="form-control u-size-100" value="<?php print $value['cantidad']?>">                             
                            </td>

                            <td>
                                <button type="submit" class="btn btn-success btn-xs">     
                                    <span class="glyphicon glyphicon-refresh"></span>                   
                                </button>
                                <a href="limpiar_carrito.php?id=<?php print $value['id']  ?>" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span> 
                                    </a>
                            </td>
                         </form>
                    </tr>

                <?php
                    }
                    }else{
                ?>
                    <tr>
                    <td colspan="7">No hay productos en el carrito</td>
                    </tr>
                <?php
                    }
                ?>
              </tbody>
              <tfoot>
                    <tr>
                        <td colspan="6">Total</td>
                        <td colspan="6">$<?php print calcularTotal(); ?></td>

                    </tr>
              </tfoot>
        </table>
        <hr>
        <?php
            if(isset($_SESSION['carrito'])&& !empty($_SESSION['carrito'])){
        ?>

            <div class="row">
                <div class="pull-left">
                    <a href="tienda.php" class="btn btn-info">Seguir comprando</a>
                </div>

                <div class="pull-right">
                 <a href="finalizar.php" class="btn btn-success">Finalizar la compra</a>
                </div>
            </div>

        <?php
            }
        ?>

    </div>

    <br>


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