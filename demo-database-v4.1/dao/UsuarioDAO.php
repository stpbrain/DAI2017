<?php

include_once __DIR__."/GenericDAO.php";
include_once __DIR__."/../model/Usuario.php";

/**
 * Description of PersonaDAO
 *
 * @author CETECOM
 */
class UsuarioDAO implements GenericDAO {
    
    /**
     *
     * @var PDO 
     */
    private $conexion;
    
    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    
    public function actualizar($registro) {
        
    }

    public function agregar($registro) {
        //valida si ya existe
        
        $q ="select email from usuario u where u.email = :mail";
        $result = mysql_query($q);
        $sent = $this->conexion->prepare($q);

        // valida si la lista de registros es mayor a 0, es por que ya existe, si es 0 lo crea
        if (mysql_num_rows($result) > 0)
        {
          echo  "usuario ya registrado  $q";
          
           //break;
        }
        

        /*@var $registro Usuario */
        
        $query = "INSERT INTO usuario (email, clave) VALUES (:email, :clave) ";
        
        $sentencia = $this->conexion->prepare($query);

        $email = $registro->getEmail();
        $clave = $registro->getClave();
        
        $sentencia->bindParam(':email', $email);
        $sentencia->bindParam(':clave', $clave);
            
        return $sentencia->execute();

    }

    public function buscarPorId($idRegistro) {
        /*@var $usuario Usuario */
        $usuario = null;
        
        $sentencia = $this->conexion->prepare("SELECT email, clave FROM usuario WHERE email = :email");
        
        $email = $idRegistro;
        $sentencia->bindParam(':email', $email);
        
        $sentencia->execute();
        
        while($registro = $sentencia->fetch()) {            
            $usuario = new Usuario();
            $usuario->setClave($registro["clave"]);
            $usuario->setEmail($registro["email"]);
        }
        
        return $usuario;
    }

    public function validarUsuario( )
    {


    }

    public function eliminar($idRegistro) {
        
    }

    public function listarTodos() {
        
    }
}
