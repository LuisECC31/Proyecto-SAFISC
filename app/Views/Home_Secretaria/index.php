<?php
session_start(); 

require_once('Cotrollers/LoginController.php');
if(isset($_SESSION['valida']) == TRUE) 
{ 
       
} 
else 
{   

       echo "No tienes permiso para entrar a esta pagina"; 
       exit(); 
}  
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Secretaria Administrativa - FISC</title>
  <meta charset="utf-8">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap/css/menustyle.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-grid.css">
</head>

<body>

    <div class="row">
        <div class="col-lg-3">
            <div class="wrapper">
                <nav id="sidebar">
                    <br><br><br>
                    <ul class="list-unstyled components">
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Gestión de Reportes</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href='/?controller=Reporte&&action=index2'> Ver Reportes</a>
                        </li>
                    </ul>
                    </li>
                    <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Usuarios</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href='/?controller=Usuario&&action=index'>Ver Usuarios</a>
                        </li>
                        <li>
                            <a href='/?controller=Usuario&&action=index2'>Añadir Usuarios</a>
                        </li>
                        <li>
                            <a href="#">Eliminar Usuarios</a>
                        </li>
                    </ul>
                    </li>
                    <li>
                        <a href="#">Cerrar Sesión</a>
                    </li>
                    <li>
                        <a href="#">Contacto para asistencia</a>
                    </li>
                    </ul>
                </nav>
            </div>
        </div>
      <div class="col-lg-7 mb-7">
            <div class="card h-100">
            <br><br>
            <h2 class="card-header">Bienvenido</h2>
            <div class="card-body">
                <p align="justify" class="card-text" >
                    Hola esta es la pagina de administraccion de SAFISC en ella podras 
                    ingresar usuarios, revisar, eliminar, actualizar reporte y poder cerrar la sesion en cualquier momento.
                    y recuerda "Entre que te despiertas y te acuestas, suceden muchas cosas bonitas. Simplemente tienes que apreciarlas.
                </p>
            </div>
        </div>
    </div>

    <script     src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
