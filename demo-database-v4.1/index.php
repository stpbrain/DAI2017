<?php
   
    session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/indexStyle.css" rel="stylesheet" type="text/css" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Inicio</title>
    </head>
    <body>     
                    
            <header>
            <div class="botones" class="btn-group btn-group-lg">
                <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href=('index.php')" center/>Inicio</button>
                <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href=('listarPersonas.php')">Listar personas</button>
                <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href=('agregarPersona.php')">Agregar persona</button>
                <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href=('registrarUsuario.php')">Registrar Usuario</button>
                <button type="button" class="btn btn-success btn-lg" onclick="window.location.href=('iniciarSesion.php')">Login</button>
                <button type="button" class="btn btn-danger btn-lg" onclick="window.location.href=('cerrarSesion.php')">Logout</button>
            </div>
            
            <img id="logo" src="img/logo.png">

            <div class="h">
                <br>
                <h1>ZONA CUMPLEAÑOS</h1>
                <h2>Empresa XYZ S.A.</h2>
            </div>
            </header>
            
            
            <div id="Carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                   
                    <div class="item active">
                      <fieldset class="alan">
                          <img id="alan"src="img/alan.jpeg" alt="alan">
                          <p>
                      </fieldset>
                  </div> 
                    
                  <div class="item">
                    <img src="img/la.jpg" alt="Los Angeles">
                  </div>

                  <div class="item">
                    <img src="img/chicago.jpg" alt="Chicago">
                  </div>

                  <div class="item">
                    <img src="img/ny.jpg" alt="New York">
                  </div>
                    
                  
                    
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div> 
       
        
        <footer>
            <p>Empresas XYZ S.A.</p
            <?php
                    if(isset($_SESSION["usuario"])) {
                        echo '<p><b>Usuario autenticado</b>: '.$_SESSION["usuario"].'</p>';
                    }
                ?>
        </footer>
        
    </body>
</html>
