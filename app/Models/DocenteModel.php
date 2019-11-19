<?php
class DocenteModel{
    private $db;
    private $docentes;
 
    public function __construct(){
        $this->db = Conexion::conectar();
        $this->docentes = array();
    }
    public function listar(){
        $consulta = $this->db->query("select * from docentes;");
        while($filas = $consulta->fetch_assoc()){
            $this->docentes[] = $filas;
        }
        return $this->docentes;
    }
}

?>