<?php
require_once("Db/db.php");
class LoginConsultaModel {
    
    private $db;
    private $Usuarios;
    
    public function __construct(){
        $this->db = Conexion::conectar();
        $this->Usuarios = array();
    }
    public function login($Usuario, $password)
    {
        $passwordmd5 = MD5($password);
        $consulta = $this->db->query("SELECT COUNT(*) as cuenta from Usuarios WHERE Usuario='$Usuario' AND password='$passwordmd5' ;");

        $resultado = $consulta->fetch_assoc();
        $conteo = $resultado['cuenta'];
        return $conteo;
    }
    }
?>
