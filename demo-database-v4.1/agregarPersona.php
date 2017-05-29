<?php
   
session_start();

include_once __DIR__."/controller/PersonaController.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["rut"]) && isset($_POST["nombre"]) && 
       isset($_POST["apellido"]) && isset($_POST["fechaNacimiento"]) &&
       isset($_POST["email"])) {

       $exito = PersonaController::registrarPersona($_POST["rut"], 
                                                    $_POST["nombre"], 
                                                    $_POST["apellido"], 
                                                    $_POST["fechaNacimiento"], 
                                                    $_POST["email"]);
       
       if($exito) {
           header("location: index.php");
           return;
       } else {  echo '<script>alert("usuario ya registrado !!")</script>';}
    }  
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/agregarStyle.css" rel="stylesheet" type="text/css">
        <title>Ingreso de Persona</title>
		 <script src="js/agregaPersona.js"></script>	 
                 
                 
    </head>
    <body>
        <div id="contenedor">
            <header>
                <h1>Agregar Persona</h1>
            </header>
            <div id="contenido">
                <div class="formulario">
                    <form id="formulario" action="agregarPersona.php" method="POST">
                        <fieldset>
                            <div class="campo">
                                <label>RUT(sin DV)</label>
                                <input type="text" name="rut"  id="rut" /> 
                                <br>
                                <a id="error_rut"></a>
                            </div>
                            <div class="campo">
                                <label>Nombre</label>
                                <input type="text" name="nombre" id="nombre"   />
                                <br>
                                <a id="error_nombre"></a>
                            </div>
                            <div class="campo">
                                <label>Apellido</label>
                                <input type="text" name="apellido"   id="apellido" />  
                                <br>
                                <a id="error_apellido"></a>
                            </div>
                            <div class="campo">
                                <label>Fecha Nacimiento</label>
                                <input type="date" name="fechaNacimiento" id="fechaNacimiento" />  
                                <br>
                                <a id="error_fechaNacimiento"></a>
                            </div>
                            <div class="campo">
                                <label>E-Mail</label>
                                <input type="email" name="email" id="email" /> 
                                <br>
                                <a id="error_mail"></a>
                            </div>
                            <br>
                            <div class="botonera">
                            <input id="registrar" type="button" onclick="validaFormulario();" value="Registrar" center/>
                            <input id="limpiar" type="button" onclick="document.location.reload();" value="Limpiar" />
                        </div>
                        </fieldset>
                        
                    </form>
                    
                </div>
            </div>
            
            <ul>
                <li>
                    <input id="inicio" type="button" onclick="window.location.href=('index.php')" center value="Inicio" />
                </li>
            </ul>
            
            
            
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
