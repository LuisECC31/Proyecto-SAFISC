<?php
session_start();
?>

<?php

require_once('Models/LoginConsultaModel.php');

class LoginController{

        function __construct()
        {
            
        }

        function index(){
		require_once('Views/Login/index.php');
        }
        
        function login(){
        if($_POST['Iniciar']=='Login'){
            $Usuario=$_POST["Usuario"];
            $password=$_POST["Contraseña"];

            $rob=new LoginConsultaModel();
            $Iniciar=$rob->login($Usuario,$password);
            if(sizeof($Iniciar)>0){
                foreach ($Iniciar as $key => $values) {
                    $_SESSION['Usuario']=$values[1];
                }
                header("location:../Views/Login/prin.php");
            }else{
                $resp= '<b><font color=red>Contraseña  o usuario Incorrecta</font></b>';
                header("location:../Views/Login/index.php?resp=".urlencode($resp));
            }
        } 
        }
        
    }
        ?>