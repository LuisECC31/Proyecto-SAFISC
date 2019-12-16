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

<body class="bg-light ">

    <div class="row">
        <div class="col-lg-3">
            <div class="wrapper">
                <nav id="sidebar">
                    <br><br><br>
                    <ul class="list-unstyled components">
                            <li class="active">
                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Gestión de Reportes</a>
                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                    <li>
                                        <a href='?controller=Reporte&&action=index4'> Crear Reporte</a>
                                    </li>
                                    <li>
                                        <a href='/?controller=Reporte&&action=index2'> Ver Reportes</a>
                                    </li>
                                </ul>
                            </li>

                    
                            <li class="active">
                                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Usuarios</a>
                                    <ul class="collapse list-unstyled" id="pageSubmenu">
                                        <li>
                                            <a href='/?controller=Usuario&&action=index'>Ver Usuarios</a>
                                        </li>
                                        <li>
                                            <a href='/?controller=Usuario&&action=index2'>Añadir Usuarios</a>
                                        </li>
                                    </ul>
                            </li>
                    

                            <li class="active">
                                <a href='/?controller=Logout&&action=logout'>Cerrar Sesión</a>
                            </li>
                        
                            <li class="active">
                                <a href="#">Contacto para asistencia</a>
                            </li>
                    </ul>
                    
                </nav>
            </div>
        </div>

        <div class="col-md-7 lg-7">
      <div class="container">
       <div class="card">
            <br><br>
            <div class="card-header col-md-12 " >
            
              <img src="https://i.pinimg.com/originals/31/01/b4/3101b4a5ac0c449883362671147f1b85.jpg" class="rounded " >

             <h2 >Bienvenido a SAFISC</h2> </div>
           
            <div class="card-body  col-md-12 ">
                <p align="justify" class="card-text  col-md-12" >
                La Facultad de Ingeniería de Sistemas Computacionales se dedica a la investigación de temas 
                relacionados a Sistemas de Información, fundamentalmente a la elaboración y aplicación de
                 técnicas que permitan crear, mantener y mejorar los sistemas de información de las 
                 organizaciones, por lo tanto para lograr esta función es necesario tener un sistema que 
                 agilice los procesos administrativas de la Secretaria Administrativa de la Facultad, 
                 por este motivo le brindamos el uso de la herramienta SAFISC para poder, verificar el avance
                 de los procesos de infraestructura de la Facultad y tener un ambiente idóneo en nuestra 
                 facultad.
                </p>
            </div>
        </div>
</div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
