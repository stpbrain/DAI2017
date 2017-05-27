<?php
   
session_start();

include_once __DIR__."/controller/UsuarioController.php";
   $errorMessage = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["email"]) && isset($_POST["clave"])) {

       $exito = UsuarioController::validarUsuarioClave($_POST["email"], $_POST["clave"]);
    
       if($exito) {
           header("location: index.php");
           return;
       } else {
           $errorMessage = "usuario o clave incorrectos";
       }
    }  
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/loginStyle.css" rel="stylesheet" type="text/css" >
        <title>Iniciar Sesion</title>
         <script src="js/login.js" ></script>
		
    </head>
    <body>
        <div id="contenedor">
            <header class="hed">
                <h1>Iniciar Sesión</h1>
            </header>
            <div id="contenido">
                <div class="formulario">
                    <form action="iniciarSesion.php" method="POST" id="formulario">
                        <fieldset id="field">
                            <div class="campo">
                                <label>E-Mail</label>								
                                <input type="email" name="email" id= "email" />
								<a id="label_mensajeEmail"></a>								
                            </div>
                            <div class="campo">
                                <label>Clave</label>
                                <input type="password" name="clave" id= "clave"  />
								<a id="label_mensajePassword"></a>
                            </div>
           
                            </div>  			
                        </fieldset>
                        
                        <div class="botonera">
                            <input id="acceder" type="button" name="enviar" value="Acceder" onclick='validaFormulario();' />
                            <input id="limpiar" type="button" onclick="document.location.reload();" value="Limpiar" />
                            <input id="salir" type="button" value="Salir" onclick="window.location.href='cerrarSesion.php'"/>
                        </div>
                    </form>
                </div>
                <ul>
                    <li>
                        <input id="inicio" type="button" onclick="window.location.href=('index.php')" center value="Inicio" />
                    </li>
                </ul>
            </div>
			
            <footer>
                <p>Empresas XYZ S.A.</p>
                <?php
				     if(isset($_SESSION["usuario"])) {
                        echo '<p><b>Usuario autenticado</b>: '.$_SESSION["usuario"].'</p>';
                    }
                ?>
            </footer>
        </div>
    </body>
</html>
