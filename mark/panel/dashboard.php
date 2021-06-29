<?php

  session_start();
  $_SESSION['usuario_info'];
  if(!isset($_SESSION['usuario_info'])  OR empty($_SESSION['usuario_info']))
    header("Location: index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Medieval Online</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/app.css">
</head>
<body>
    <header class="header1 inicio">
        <div class="contenedor contenido-header1">
            <div class="barra">
                <a href="dashboard.php">
                <img src="../assets/img/medieval.png" alt="Espadas cruzadas">
                </a>
                <nav class="navegacion">
                    <a href="armas/index.php">
                        Armas
                    </a>
                    <a href="pedidos/index.php">
                        Pedidos
                    </a>
                    
                    <a href="salir.php">
                        Salir <?php print $_SESSION['usuario_info']['nombre_usuario'];?>
                    </a>
                </nav>
                
            </div>
            <h1>Venta de armas medievales</h1>
        </div>
        
    </header>

    <div class="row">
            <div class="col-md-12">
            <fieldset>
               <legend>Listado de los 10 Últimos Pedidos</legend> 
               <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td>#</td>
                            <td>Cliente</td>
                            <td>No.Pedido</td>
                            <td>Total</td>
                            <td>Fecha</td>
                            <td></td>

                        </tr>
                    </thead>
                    <tbody>
                    <?php
                      require '../vendor/autoload.php';
                      $pedido = new Medieval\Pedido;
                      $info_pedido = $pedido->mostrarUltimos();

                    
                      $cantidad = count($info_pedido);
                      if($cantidad > 0){
                        $c=0;
                      for($x =0; $x < $cantidad; $x++){
                        $c++;
                        $item = $info_pedido[$x];
                    ?>


                    <tr>
                      <td><?php print $c?></td>
                      <td><?php print $item['nombre'].' '.$item['apellidos']?></td>
                      <td><?php print $item['id']?></td>
                      <td>$ <?php print $item['total']?></td>
                      <td> <?php print $item['fecha']?></td>
                      <td class="text-center">
                        <a href="pedidos/ver.php?id=<?php print $item['id'] ?>" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-eye-open"></span></a>
                      </td>
                    
                    </tr>

                    <?php
                      }
                    }else{

                    ?>
                    <tr>
                      <td colspan="6">NO HAY REGISTROS</td>
                    </tr>

                    <?php }?>

                    </tbody>
                </table>
            </fieldset>
             </div>
        </div>
    </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
