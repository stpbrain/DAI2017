<?php


/**
 * Description of Usuario
 *
 * @author osvaldo
 */
class Usuario {
    private $email;
    private $clave;
    
    public function __construct() {
        
    }
    
    public function getEmail() {
        return $this->email;
    }

    public function getClave() {
        return $this->clave;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setClave($clave) {
        $this->clave = $clave;
    }


}
