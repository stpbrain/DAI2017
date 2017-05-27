<?php
   
    session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <ul>
            <li>
                <a href="index.php">Inicio</a>
            </li>
            <li>
                <a href="listarPersonas.php">Listar personas</a>
            </li>
            <li>
                <a href="agregarPersona.php">Agregar persona</a>
            </li>
            <li>
                <a href="registrarUsuario.php">Registrar Usuario</a>
            </li>
            <li>
                <a href="iniciarSesion.php">Login</a>
            </li>
            <li>
                <a href="cerrarSesion.php">Logout</a>
            </li>
        </ul> 
        
        <?php
            if(isset($_SESSION["usuario"])) {
                echo '<p><b>Usuario autenticado</b>: '.$_SESSION["usuario"].'</p>';
            }
        ?>
    </body>
</html>
