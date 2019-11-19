<?php
class AdministrativoModel{
    private $db;
    private $administrativos;
 
    public function __construct(){
        $this->db = Conexion::conectar();
        $this->administrativos = array();
    }
    public function listar(){
        $consulta = $this->db->query("select * from administrativos;");
        while($registros = $consulta->fetch_assoc()){
            $this->administrativos[] = $registros;
        }
        return $this->administrativos;
    }
}

?>