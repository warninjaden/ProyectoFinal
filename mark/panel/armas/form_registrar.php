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
            <fieldset>
            <legend>Datos del artículo</legend>
            
            <form method="POST" action="../acciones.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="titulo"required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea class="form-control" name="descripcion" id=""cols="3" required></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tipo</label>
                       <select class="form-control" name="tipo_id" required>
                           <option value="">--Seleccionar--</option>
                            <?php

                                require '../../vendor/autoload.php';
                                $tipo = new Medieval\Tipo;
                                $info_tipo = $tipo->mostrar();
                                $cantidad = count($info_tipo);
                                for($x=0;$x<$cantidad;$x++){
                                     $item=$info_tipo[$x];
                            ?>

                                <option value="<?php print $item["id"] ?>"><?php print $item["nombre"] ?> </option>
                            <?php
                                }
                            ?>
                       </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="foto" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" class="form-control" name="precio" placeholder="$00.00"required>
                    </div>
                </div>
            </div>

                <input type="submit" name="accion" class="btn btn-primary btn-margin" value="Registrar">
                <a href="index.php" class="btn btn-default btn-margin">Cancelar</a>
            </form>
            
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
