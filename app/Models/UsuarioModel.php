<?php
class UsuarioModel{
    private $db;
    private $Mostrar;
    private $Rol;
 
    public function __construct(){
        $this->db = Conexion::conectar();
        $this->Mostrar = array();
        $this->Rol = array();    
    }

    public function listarrol(){
        $consulta = $this->db->query("SELECT NombreR FROM Roles;");
        while($filas = $consulta->fetch_assoc()){
            $this->Rol[] = $filas;
        }
        return $this->Rol;
    }

    public function mostrar(){
        $consulta = $this->db->query("SELECT Usuario,u1.Nombre as Nombre1,Apellido,r2.NombreR as Nombre2
        ,p2.NombreP as Nombre3 FROM Usuarios u1
        INNER JOIN Roles r2 
        ON u1.NombreR=r2.NombreR
        INNER JOIN Permisos_has_Roles p1
        ON r2.NombreR=p1.NombreR
        INNER JOIN Permisos p2
        ON p1.NombreP=p2.NombreP;");
        while($registros = $consulta->fetch_assoc()){
            $this->Mostrar[] = $registros;
        }
        return $this->Mostrar;
    }


    public function añadir($Usuario,$password,$Nombre,$Apellido,$NombreR){
        $consulta = $this->db->query("INSERT INTO Usuarios (`Usuario`,`password`,`Nombre`,`Apellido`,`NombreR`)
                                      VALUES('$Usuario',MD5('$password'),'$Nombre','$Apellido','$NombreR');");                                
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