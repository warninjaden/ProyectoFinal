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
<body >
    <header class="header1 inicio">
        <div class="contenedor contenido-header1">
            <div class="barra">
                <a href="../dashboard.php">
                <img src="../../assets/img/medieval.png" alt="Espadas cruzadas">
                </a>
                <nav class="navegacion">
                <a href="index.php">
                        Armas
                    </a>
                    <a href="../pedidos/index.php">
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
    <div class="contenedor" id="main" >
        <div class="row">
            <div class="col-md-12">
                <div class="pull-right">
                    <a href="form_registrar.php" class="btn btn-primary btn-margin">
                        <span class="glyphicon glyphicon-plus"></span> Nuevo</a>
                </div>
            
             </div>
        </div>

        <div class="row">
            <div class="col-md-12">
            <fieldset>
               <legend>Listado de armas</legend> 
               <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td>#</td>
                            <td>Nombre</td>
                            <td>Tipo</td>
                            <td>Precio</td>
                            <td class="text-center">Foto</td>
                            <td></td>

                        </tr>
                    </thead>
                    <tbody>
                    <?php
                      require '../../vendor/autoload.php';
                      $arma = new Medieval\Arma;
                      $info_arma = $arma->mostrar();

                    
                      $cantidad = count($info_arma);
                      if($cantidad > 0){
                        $c=0;
                      for($x =0; $x < $cantidad; $x++){
                        $c++;
                        $item = $info_arma[$x];
                    ?>


                    <tr>
                      <td><?php print $c?></td>
                      <td><?php print $item['titulo']?></td>
                      <td><?php print $item['nombre']?></td>
                      <td><?php print $item['precio']?></td>
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
                      <td class="text-center">
                        <a href="../acciones.php?id=<?php print $item['id'] ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                        <a href="form_actualizar.php?id=<?php print $item['id']  ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
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
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

  </body>
</html>
