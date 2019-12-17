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


            if($datos == "secretaria_administrativa" ){
                $_SESSION['valida'] = TRUE;
                header("location:?controller=Secretaria&&action=index");
                die();
                
            }

            if($datos == "Mantenimiento"){
                $_SESSION['valida'] = TRUE;
                header("location:?controller=Mantenimiento&&action=index");
                die();
                
            }
            else{
                header("location:?controller=Home&&action=index");
                }
        
        
    }
}
?>
