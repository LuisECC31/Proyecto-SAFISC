<?php

class LoginConsultaModel {
    
    private $lista;
    
    public function __construct(){
        $this->db = Conexion::conectar();
        $this->docentes = array();
    }
    
    public function login($Usuario,$contraseña){
        $query=mysqli_query(Conexion::con(), "call login('$Usuario','$contraseña')");
      while ($row=mysqli_fetch_array($query)){
          $this->lista[]=$row;
      }
      return $this->lista;
    }
    
    
}
