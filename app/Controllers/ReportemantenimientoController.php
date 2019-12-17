<?php 
ob_start();

require_once('Models/ReporteModel.php');
class ReportemantenimientoController
{

	function __construct()
	{

	}


	function index2(){
		$Mostrar = new ReporteModel();
		$datos = $Mostrar->listar();
		require_once('Views/Home_Mantenimiento/Administración_de_reportes/Mostrar_reportes/index.php');
	}

	function index3(){
		
		require_once('Views/Home_Mantenimiento/Administración_de_reportes/Crear_reportes/princ.php'); 
	}

	function index4(){
		$Reporte= new ReporteModel();
		$datos = $Reporte->listardano();
		$datos2 = $Reporte->listarubicaciones();
		require_once('Views/Home_Mantenimiento/Administración_de_reportes/Crear_reportes/index.php');
	}

	function index5(){
		$delete_Reporte_id=$_POST['idReportes_de_dano'];
		require_once('Views/Home_Mantenimiento/Administración_de_reportes/Actualizar_Reporte/index.php');
	}

	function index6(){
		
		require_once('Views/Home_Mantenimiento/Administración_de_reportes/Actualizar_Reporte/Princ.php');
	}


	function eliminar(){
		$delete_Reporte_id=$_POST['idReportes_de_dano'];

		$Mostrar = new ReporteModel();
		$datos2 = $Mostrar->delete($delete_Reporte_id);
		
		if($datos2 === TRUE){
			
			header("location:?controller=Reportemantenimiento&&action=index2");
			exit();
		}

		else{
			echo"location:/?controller=Mantenimiento&&action=index";
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
			
			header("location:?controller=Reportemantenimiento&&action=index3");
			exit();
		}

		else{
			echo"location:?controller=Reportemantenimiento&&action=index";
			}
	
	
	}

	function actualizar(){
		$delete_Reporte_id=$_POST['idReportes_de_dano'];
		$Observacion=$_POST['Observacion'];
		$Fecha_de_inspeccion=$_POST['Fecha_de_inspeccion'];

		$ActualizarReporte= new ReporteModel();
		$datos = $ActualizarReporte->actualizar($delete_Reporte_id,$Observacion,$Fecha_de_inspeccion);

		if($datos === TRUE){
			
			header("location:?controller=Reportemantenimiento&&action=index6");
			exit();
		}

		else{
			echo"location:?controller=Reportemantenimiento&&action=index";
			}
	
	
	}

}
?>
