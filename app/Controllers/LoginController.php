<?php
session_start();
ob_start();

require_once('Models/LoginConsultaModel.php');
class LoginController{

        function __construct()
        {
            
        }

        function index(){
		require_once('Views/Login/index.php');
        }
        

        function login(){

            $Usuario=$_POST['Usuario'];
            $password=$_POST['Contraseña'];
            
            $LoginUser= new LoginConsultaModel();
            $datos = $LoginUser->login($Usuario,$password);

            if($datos>0){
                header("location:/Views/Login/prin.php");
                
            }
            else{
                header("location:/Views/Home/index.php");
                }
        
        
    }
}
?>
