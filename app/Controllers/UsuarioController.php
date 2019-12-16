<?php 
require_once('Models/UsuarioModel.php');

class UsuarioController
{

	function __construct()
	{

	}

	function index(){
		$Mostrar = new UsuarioModel();
		$datos = $Mostrar->mostrar();
		require_once('Views/Home_Secretaria/Administración_de_Usuarios/Ver_Usuarios/index.php');
	}

	function index2(){
		$Mostrar = new UsuarioModel();
		$datos1 = $Mostrar->listarrol();
		require_once('Views/Home_Secretaria/Administración_de_Usuarios/Añadir_Usuario/index.php');
	}

	function eliminar(){
		$idUsuarios=$_POST['idUsuarios'];

		$Mostrar = new UsuarioModel();
		$datos2 = $Mostrar->delete($idUsuarios);
		
		if($datos2 === TRUE){
			
			header("location:?controller=Usuario&&action=index");
			exit();
		}

		else{
			echo"location:/Views/Home/index.php";
			}
	}


	function add(){

		$Usuario=$_POST['Usuario'];
		$password=$_POST['password'];
		$Nombre=$_POST['Nombre'];
		$Apellido=$_POST['Apellido'];
		$NombreR=$_POST['NombreR'];
		
		$CrearUsario = new UsuarioModel();
		$datos = $CrearUsario->añadir($Usuario,$password,$Nombre,$Apellido,$NombreR);
	
		if($datos === TRUE){
			
			header("location:?controller=Usuario&&action=index");
			
			exit();
		}
		else{
			echo"location:/Views/Home/index.php";
			}
		}

	}
?>