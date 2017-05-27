<?php

/**
 * Description of Persona
 *
 * @author CETECOM
 */
class Persona {
    private $rut;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $email;
    
    public function __construct() {
        
    }
    
    public function getRut() {
        return $this->rut;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setRut($rut) {
        $this->rut = $rut;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

}
