<?php
require 'Db/db.php';
class LoginConsultaModel {
    
    private $lista;
    
    public function _construct(){
        $this->lista=array();
    }
    
    public function login($Usuario,$contraseña){
        $query=mysqli_query(Conexion::con(), "call login('$Usuario','$contraseña')");
      while ($row=mysqli_fetch_array($query)){
          $this->lista[]=$row;
      }
      return $this->lista;
    }
    
    
}
