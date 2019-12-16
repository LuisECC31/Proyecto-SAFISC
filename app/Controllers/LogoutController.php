<?php
session_start();
ob_start();

class LogoutController
{

	function __construct()
	{

	}


function logout(){
		session_destroy();
        header("location:?controller=Home&&action=index");
    }
}
?>