<?php 
ob_start();

require_once('Models/ReporteModel.php');
class SecretariaController
{

	function __construct()
	{

	}

	function index(){
		
		require_once('Views/Home_Secretaria/index.php');
	}

	function index2(){
		
		require_once('Views/Home_Secretaria/Asistencia/index.php');
	}
}

?>
