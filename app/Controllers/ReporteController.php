<?php 
ob_start();

require_once('Models/ReporteModel.php');
class ReporteController
{

	function __construct()
	{

	}

	function index(){
		$Reporte= new ReporteModel();
		$datos = $Reporte->listardano();
		$datos2 = $Reporte->listarubicaciones();
		require_once('Views/Crear_Reportes/index.php');
	}

	function reporte(){

		$Solicitante=$_POST['Solicitante'];
		$Cedula=$_POST['Cedula'];
		$Descripcion=$_POST['Descripcion_del_dano'];
		$Tipo_de_Dano=$_POST['Tipo_de_Dano'];
		$Lugar=$_POST['Lugar'];

		$CrearReporte= new ReporteModel();
		$datos = $CrearReporte->reporte($Solicitante,$Cedula,$Descripcion,$Tipo_de_Dano,$Lugar);

		if($datos === TRUE){
			
			header("location:/Views/Crear_Reportes/princ.php");
		}

		else{
			echo"location:/Views/Home/index.php";
			}
	
	
	}
}
?>
