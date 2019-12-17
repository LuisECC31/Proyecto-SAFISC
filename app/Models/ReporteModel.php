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

    public function Anadirdanos($Tipodedano){
        $consulta = $this->db->query("INSERT INTO Tipo_de_Dano (`Tipo_de_Dano`)
                                      VALUES  ('$Tipodedano');"); 
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

    public function Anadirubicaciones($ubicacion){
        $consulta = $this->db->query("INSERT INTO Ubicaciones (`Lugar`)
                                      VALUES  ('$ubicacion');"); 
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

    public function delete($Id_reporte){
        $consulta = $this->db->query("DELETE FROM Reportes_de_dano WHERE idReportes_de_dano = $Id_reporte;");
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
        $consulta = $this->db->query("SELECT idReportes_de_dano,Fecha_de_solicitud,Solicitante,Cedula,Descripcion_del_dano,Tipo_de_Dano,Lugar,Observacion,Fecha_de_inspeccion FROM Reportes_de_dano;");
        while($filas = $consulta->fetch_assoc()){
            $this->Mostrar[] = $filas;
        }
        return $this->Mostrar;
    }

    public function actualizar($delete_Reporte_id,$Observacion,$Fecha_de_inspeccion){
        $consulta = $this->db->query("UPDATE Reportes_de_dano
                                      SET Observacion='$Observacion', Fecha_de_inspeccion='$Fecha_de_inspeccion'
                                      WHERE idReportes_de_dano='$delete_Reporte_id';");                                
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

}




?>