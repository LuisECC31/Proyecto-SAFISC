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

	function index2(){
		$Mostrar = new ReporteModel();
		$datos = $Mostrar->listar();
		require_once('Views/Home_Secretaria/MostrarReporte/index.php');
	}

	function index3(){
		
		require_once('Views/Crear_Reportes/princ.php'); 
	}

	function index4(){
		$Reporte= new ReporteModel();
		$datos = $Reporte->listardano();
		$datos2 = $Reporte->listarubicaciones();
		require_once('Views/Home_Secretaria/Crear_Reportes/index.php');
	}

	function index5(){
		
		require_once('Views/Home_Secretaria/Crear_Reportes/princ.php'); 
	}

	function eliminar(){
		$delete_Reporte_id=$_POST['idReportes_de_dano'];

		$Mostrar = new ReporteModel();
		$datos2 = $Mostrar->delete($delete_Reporte_id);
		
		if($datos2 === TRUE){
			
			header("location:?controller=Reporte&&action=index2");
			exit();
		}

		else{
			echo"location:/Views/Home/index.php";
			}
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
			
			header("location:?controller=Reporte&&action=index3");
			exit();
		}

		else{
			echo"location:?controller=Home&&action=index";
			}
	
	
	}

	function reporte2(){

		$Solicitante=$_POST['Solicitante'];
		$Cedula=$_POST['Cedula'];
		$Descripcion=$_POST['Descripcion_del_dano'];
		$Tipo_de_Dano=$_POST['Tipo_de_Dano'];
		$Lugar=$_POST['Lugar'];

		$CrearReporte= new ReporteModel();
		$datos = $CrearReporte->reporte($Solicitante,$Cedula,$Descripcion,$Tipo_de_Dano,$Lugar);

		if($datos === TRUE){
			
			header("location:?controller=Reporte&&action=index5");
			exit();
		}

		else{
			header("?controller=Reporte&&action=index4");
			exit();
	
	
	}

}
}
?>
