<?php
class LoginConsultaModel {
    
    private $db;
    private $Usuarios;
    
    public function __construct(){
        $this->db = Conexion::conectar();
        $this->Usuarios = array();
    }
    public function login($Usuario,$password){
        $consulta = $this->db->query("SELECT COUNT(*) from Usuario WHERE Usuario='$Usuario' AND Contraseña='$password' ;");
        while($registros = $consulta->fetch_assoc()){
            $this->Usuarios[] = $registros;
        }
        return $this->Usuarios;
    }
    }
?>
