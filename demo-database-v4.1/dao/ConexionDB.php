<?php

/**
 * Description of ConexionDB
 *
 * @author CETECOM
 */
class ConexionDB {

    const HOST = "localhost";
    const DBNAME = "dai5501_demodb";
    const PORT = "3306";
    const USER = "root";
    const PASS = "";
    
    public static function getConexion() {
        $dsn = "mysql:host=".self::HOST.";dbname=".self::DBNAME.";port=".self::PORT.";charset=utf8";
        
        try {
            $dbConexion = new PDO($dsn, self::USER, self::PASS);            
            return $dbConexion;
        } catch (PDOException $exception) {
            switch ($exception->getCode()) {
                case 2002:
                        echo '<div class="error">No se pudo establecer la conexión con la base de datos, revise que &eacute;sta se encuentre en ejecuci&oacute;n.</div>';
                        exit;
                case 1045:
                        echo '<div class="error">No se pudo conectar a la base de datos, revise las credenciales configuradas</div>';
                        exit;
                case 1049: // La base de datos no existe.                        
                        $dbConexion = self::crearBaseDatos();
                        return $dbConexion;                        
                default:
                    echo '<div class="error">'.$exception->getMessage().'</div>';
                    break;
                    
            }            
        }        
    }
    
    private static function crearBaseDatos() {
        
        echo '<div class="warning">Base de datos no encontrada, se crear&aacute;...</div>';
        $dsn = "mysql:host=".self::HOST.";port=".self::PORT.";charset=utf8";
        $mysqlConexion = new PDO($dsn, self::USER, self::PASS); 
        $mysqlConexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $mysqlConexion->exec("CREATE DATABASE ".self::DBNAME);
        $mysqlConexion->exec("USE ".self::DBNAME);
        $mysqlConexion->exec("CREATE TABLE persona (rut INT(11) PRIMARY KEY, nombre VARCHAR(50) NOT NULL, apellido VARCHAR(50) NOT NULL, fecha_nacimiento DATE NOT NULL, email VARCHAR(100) NOT NULL)");  
        $mysqlConexion->exec("CREATE TABLE usuario (email VARCHAR(100) PRIMARY KEY, clave VARCHAR(256) NOT NULL)");  
        echo '<div class="success">Base de datos creada exitosamente.</div>';
        
        return $mysqlConexion;
    }
}
