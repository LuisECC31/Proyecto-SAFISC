<?php 
ob_start();

class MantenimientoController
{

	function __construct()
	{

	}

	function index(){
		
		require_once('Views/Home_Mantenimiento/index.php');
	}
}

?>
