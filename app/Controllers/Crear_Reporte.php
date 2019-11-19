<?php 
/**
*
*/
require_once('Models/Crear_reporte.php');

class Crear_reporteController
{

	function __construct()
	{

	}

	function index(){
		$crear_reporte = new crear_reporteModel();
		$datos = $crear_reporte->listar();
		require_once('Views/Crear_Reportes/index.php');
	}

}
?>
