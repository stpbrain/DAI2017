<?php

include_once __DIR__."/../dao/ConexionDB.php";
include_once __DIR__."/../model/Usuario.php";
include_once __DIR__."/../dao/UsuarioDAO.php";

/**
 * Description of UsuarioController
 *
 * @author CETECOM
 */
class UsuarioController {    
    
    public static function registrarUsuario($email, $clave, $confirmacionClave) {
        
        // validar que los datos sean válidos        
        if($clave != $confirmacionClave) {
            return false;
        }
        
        $usuario = new Usuario();        
        $usuario->setEmail($email);
        
        $hash = password_hash($clave, PASSWORD_BCRYPT);
        $usuario->setClave($hash);
        
        $conexion = ConexionDB::getConexion();
        $daoUsuario= new UsuarioDAO($conexion);
        
        return $daoUsuario->agregar($usuario); 
                       
    }
    
    public static function validarUsuarioClave($email, $clave) {
        
        $conexion = ConexionDB::getConexion();
        $daoUsuario= new UsuarioDAO($conexion);
        
        $usuario = $daoUsuario->buscarPorId($email);
        
        if($usuario == null)  {
            return false;
        }
        
        
        if(password_verify($clave, $usuario->getClave())) {
            $_SESSION["usuario"] = $usuario->getEmail();
            return true;
        }
        
        return false;
    }
}
