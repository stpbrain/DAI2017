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
            <div id="enunciado">
                <br>
                <h1>ZONA CUMPLEAÑOS</h1>
                <h2>Empresa XYZ S.A.</h2>
            </div>
        </header>
        
        <img id="logo" src="img/logo.png">

        <div class="botonera">
            <input id="inicio"  type="button" onclick="window.location.href=('index.php')" value="Inicio" center/>
            <input id="listar" type="button" onclick="window.location.href=('listarPersonas.php')" value="Listar personas">
            <input id="agregar" type="button" onclick="window.location.href=('agregarPersona.php')" value="Agregar persona">
            <input id="registrar" type="button" onclick="window.location.href=('registrarUsuario.php')" value="Registrar Usuario">
            <input id="login" type="button" onclick="window.location.href=('iniciarSesion.php')" value="Login">
            <input id="logout" type="button" onclick="window.location.href=('cerrarSesion.php')" value="Logout">
        </div>  
        
            <div id="Carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3 "></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                   
                    <div class="item active">
                        <table class="tarjetas">
                            <tr>
                                <td><img id="foto"src="img/alan.jpeg" alt="alan"></td>
                                <td><p id="nombre">Alan Brito
                                        <br>
                                        31 de mayo
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="item">
                        <table class="tarjetas">
                            <tr>
                                <td><img id="foto"src="img/aquiles.jpg" alt="aquiles"></td>
                                <td><p id="nombre">Aquiles Baeza
                                        <br>
                                        25 de Agosto
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="item">
                        <table class="tarjetas">
                            <tr>
                                <td><img id="foto"src="img/cindy.jpg" alt="cindy"></td>
                                <td><p id="nombre">Cindy Ente
                                        <br>
                                        08 de Enero
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="item">
                        <table class="tarjetas">
                            <tr>
                                <td><img id="foto"src="img/armando.jpg" alt="armando"></td>
                                <td><p id="nombre">Armando Casas
                                        <br>
                                        29 de Febrero
                                    </p>
                                </td>
                            </tr>
                        </table>
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
