<?php
class ReporteModel {
    
    private $db;
    private $dano;
    private $ubicacion;
    private $Mostrar;
    
    public function __construct(){
        $this->db = Conexion::conectar();
        $this->dano = array();
        $this->ubicacion = array();
        $this->Mostrar = array();
    }

    public function listardano(){
        $consulta = $this->db->query("SELECT Tipo_de_Dano FROM Tipo_de_Dano;");
        while($filas = $consulta->fetch_assoc()){
            $this->dano[] = $filas;
        }
        return $this->dano;
    }

    public function listarubicaciones(){
        $consulta = $this->db->query("SELECT Lugar FROM Ubicaciones;");
        while($filas = $consulta->fetch_assoc()){
            $this->ubicacion[] = $filas;
        }
        return $this->ubicacion;
    }

    public function reporte($Solicitante,$Cedula,$Descripcion,$Tipo_de_Dano,$Lugar){
        $consulta = $this->db->query("INSERT INTO Reportes_de_dano (`Solicitante`,`Cedula`,`Descripcion_del_dano`,`Tipo_de_Dano`,`Lugar`)
                                      VALUES  ('$Solicitante','$Cedula','$Descripcion','$Tipo_de_Dano','$Lugar');");                                
       $result = $consulta; 
       if($result === TRUE)	
           {
               return $datos = TRUE;
           }
        else
           {
               return $datos = FALSE;
           }
    }

    public function listar(){
        $consulta = $this->db->query("SELECT Solicitante,Cedula,Descripcion_del_dano,Tipo_de_Dano,Lugar FROM Reportes_de_dano;");
        while($filas = $consulta->fetch_assoc()){
            $this->Mostrar[] = $filas;
        }
        return $this->Mostrar;
    }
}


?>