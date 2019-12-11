<?php
session_start();
class LoginController{

        function __construct()
        {
            
        }

        function index(){
		require_once('Views/Login/index.php');
        }

        function login(){

            $Usuario=$_POST["Usuario"];
            $password=$_POST["Contraseña"];

            require_once('Models/LoginConsultaModel.php');
            $rob=new LoginConsultaModel();
            $Iniciar=$rob->login();
            if($Iniciar>0){
                $Usuario = $_SESSION ['Usuario'];
                header("location:/Views/Login/prin.php");
            }
            else{
                header("location:/Views/Login/prin.php");            }
        
    }
}
?>
