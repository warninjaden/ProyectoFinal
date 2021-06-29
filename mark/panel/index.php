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
                <a href="../principal.php">
                <img src="../assets/img/medieval.png" alt="Espadas cruzadas">
                </a>
            </div>
            <h1>Venta de armas medievales</h1>
        </div>
    </header>



 <div class="contenedor" id="main">
         <div class="main-log">
            <form action="login.php" method="post">
                <div class="panel panel-default">
                        <div class="panel-heading">
                        <h3>Bienvenido</h3>
                        </div>  
                 <div class="panel-body img-gondor">
                    <p class="text-center">
                     <img src="../assets/img/gondor.png">
                     </p>  
                     <br>
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" class="form-control" name="nombre_usuario" 
                    placeholder="Ingrese su usuario" required>
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" name="contraseña" 
                    placeholder="Ingrese su contraseña" required>
                </div>

                <button type="submit" class="btn btn-margin btn-primary btn-block">Ingresar</button>
                </div>
                </div>
            </form>
        </div>
</div> 


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

  </body>
</html>
