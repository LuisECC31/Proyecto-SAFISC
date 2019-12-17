<?php
require_once("Db/db.php");
class LoginConsultaModel {
    
    private $db;

    
    public function __construct(){
        $this->db = Conexion::conectar();
        $this->tipos = array();

        
    }
    public function login($Usuario, $password)
    {
        $passwordmd5 = MD5($password);
        $consulta = $this->db->query("SELECT NombreR as tipo from Usuarios WHERE Usuario='$Usuario' AND password='$passwordmd5' ;");

        $resultado = $consulta->fetch_assoc();
        $tipos = $resultado['tipo'];
        return $tipos;
    }
    }
?>
