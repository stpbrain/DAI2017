<?php
   
session_start();

include_once __DIR__."/controller/UsuarioController.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["email"]) && isset($_POST["clave"]) &&  isset($_POST["confirmacion"])) {

       $exito = UsuarioController::registrarUsuario($_POST["email"], $_POST["clave"], $_POST["confirmacion"]);
       
       if($exito) {
           header("location: index.php");
           return;
       } 
    }  
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/registrarStyle.css" rel="stylesheet" type="text/css">
        <title>Registro de Usuario</title>
	    <script src="js/registrarUsuario.js" ></script>	
            
    </head>
    <body>
        <div id="contenedor">
            <header>
                <h1>Registrar Usuario</h1>
            </header>
            <div id="contenido">
                <div class="formulario">
                    <form action="registrarUsuario.php" method="POST" id="formulario">
                        <fieldset>
                            <div class="campo">
                                <label>E-Mail</label>
                                <input type="email" name="email" id="email" /> <a id="error_mail"></a>
                            </div>
                            <div class="campo">
                                <label>Clave</label>
                                <input type="password" name="clave" id="clave" /> <a id="error_clave"></a>
                            </div>    
                            <div class="campo">
                                <label>Confirmar Clave</label>
                                <input type="password" name="confirmacion" id="confirmacion" /> <a id="error_confirm_clave"></a>
                            </div>   
                        </fieldset>
                        <div class="botonera">
                            <input id="registrar" type="button" onclick="validaFormulario();" value="Registrar" center/>
                            <input id="limpiar" type="button" onclick="document.location.reload();" value="Limpiar" />
                        </div>
                    </form>
                </div>
                <ul>
                    <li>
                        <input id="inicio" type="button" onclick="window.location.href=('index.php')" value="Inicio" />
                        
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
