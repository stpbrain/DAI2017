<?php

/**
 *
 * @author CETECOM
 */
interface GenericDAO {
    
    public function agregar($registro);
    
    public function actualizar($registro);
    
    public function eliminar($idRegistro);
    
    public function listarTodos();
    
    public function buscarPorId($idRegistro);
    
}
