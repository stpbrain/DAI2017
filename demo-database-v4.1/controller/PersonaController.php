<?php

include_once __DIR__."/../dao/ConexionDB.php";
include_once __DIR__."/../dao/PersonaDAO.php";

/**
 * Description of PersonaController
 *
 * @author CETECOM
 */
class PersonaController {    
    
    public static function listarPersonasRegistradas() {
        $conexion = ConexionDB::getConexion();
        $daoPersona = new PersonaDAO($conexion);
        
        return $daoPersona->listarTodos();
    }
    
    public static function registrarPersona($rut, $nombre, $apellido,
                                            $fechaNacimiento, $email) {
        
        // validar que los datos sean válidos
        
        $persona = new Persona();
        $persona->setRut($rut);
        $persona->setNombre($nombre);
        $persona->setApellido($apellido);
        $persona->setFechaNacimiento($fechaNacimiento);
        $persona->setEmail($email);
        
        $conexion = ConexionDB::getConexion();
        $daoPersona = new PersonaDAO($conexion);
        
        return $daoPersona->agregar($persona); 
        
    }
}
