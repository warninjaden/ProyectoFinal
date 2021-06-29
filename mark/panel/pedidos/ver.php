<?php

  session_start();
  $_SESSION['usuario_info'];
  if(!isset($_SESSION['usuario_info'])  OR empty($_SESSION['usuario_info']))
    header("Location: ../index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Medieval Online</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/app.css">
</head>
<body>
    <header class="header1 inicio">
        <div class="contenedor contenido-header1">
            <div class="barra">
                <a href="../dashboard.php" class="hidden-print">
                <img src="../../assets/img/medieval.png" alt="Espadas cruzadas">
                </a>
                <nav class="navegacion">
                    <a href="../armas/index.php" class="hidden-print">
                        Armas
                    </a>
                    <a href="index.php" class="hidden-print">
                        Pedidos
                    </a>
                    <a href="../salir.php">
                        Salir <?php print $_SESSION['usuario_info']['nombre_usuario'];?>
                    </a>
                </nav>
                
            </div>
            <h1>Venta de armas medievales</h1>
        </div>
        
    </header>
    <div class="contenedor" id="main">
        <div class="row">
            <div class="col-md-12">
            <fieldset>
                <?php 
                
                require '../../vendor/autoload.php';
                $id = $_GET['id'];
                $pedido = new Medieval\Pedido;

                $info_pedido = $pedido->mostrarPorId($id);
                $info_detalle_pedido = $pedido->mostrarDetallePorIdPedido($id);

                
                ?>

                <legend>Información de la compra</legend>
                <div class="form-group">
                <label>Nombre</label>
                <input value = "<?php print $info_pedido['nombre'] ?>"type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                <label>Apellidos</label>
                <input value = "<?php print $info_pedido['apellidos'] ?>"type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                <label>Email</label>
                <input value = "<?php print $info_pedido['email'] ?>"type="text" class="form-control" readonly>
                </div>
                <div class="form-group">
                <label>Fecha</label>
                <input value = "<?php print $info_pedido['fecha'] ?>"type="text" class="form-control" readonly>
                </div>


                <hr>
                    Productos comprados
                <hr>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td>#</td>
                            <td>Nombre</td>
                            <td>Foto</td>
                            <td>Precio</td>
                            <td>Cantidad</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                      $cantidad = count($info_detalle_pedido);
                      if($cantidad > 0){
                        $c=0;
                      for($x =0; $x < $cantidad; $x++){
                        $c++;
                        $item = $info_detalle_pedido[$x];
                    ?>


                    <tr>
                      <td><?php print $c?></td>
                      <td><?php print $item['titulo'] ?></td>
                      <td class="text-center">
                        <?php
                          $foto = '../../upload/'.$item['foto'];
                          if(file_exists($foto)){
                        ?>
                          <img  class="img-gondor" src="<?php print $foto; ?>" >
                      <?php }else{?>
                          SIN FOTO
                      <?php }?>
                      </td>
                      <td>$ <?php print $item['precio']?></td>
                      <td> <?php print $item['cantidad']?></td>
                      
                    
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
            <div class="form-group col-md-3">
                <label>Total</label>
                <input value = "<?php print $info_pedido['total'] ?>"type="text" class="form-control" readonly>
                </div>
                
            </div>
            <div class="pull-left">
            <a href="index.php" style="margin-left:3rem"class="btn btn-default hidden-print">Cancelar</a>
            </div>
            <div class="pull-right">
            <a href="javascript:;" style="margin-right:3rem"class="btn btn-danger hidden-print" id="btnImprimir">Imprimir</a>
            </div>
        </div>
    </div>
    <br>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script>
        $('#btnImprimir').on('click',function(){
            window.print();
            return false;
        })
    </script>
  </body>
</html>
