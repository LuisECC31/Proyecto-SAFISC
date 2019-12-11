<?php
require_once("Db/db.php");
class LoginConsultaModel {
    
    private $lista;
    
    public function __construct(){
        $this->db = Conexion::conectar();
        $this->docentes = array();
    }
    
    public function login(){
        $consulta = $this->db->query("select COUNT(*) from Usuarios where Usuario = '$Usuario' and password = '$password'");
        while($registros = $consulta->fetch_assoc()){
            $this->lista[] = $row;
        }
        return $this->lista;
    }
    }
?>
