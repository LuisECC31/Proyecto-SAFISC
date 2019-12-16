<?php 
    session_start();
    ob_start();
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
        <link href="/bootstrap/css/dashboard.css" rel="stylesheet">

        <title>Añadir tipo de daño</title>  
    </head>
<body class="p-3 mb-2 bg-light ">
    <div class="container">
    <div class="text-center py-5">
      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">Tipo de Daño añadido con éxito</h5><br>
          <button type="button" class="btn btn-outline-dark" onclick="location.href='?controller=Reporte&&action=index6'">Añadir otro tipo de daño</a>
          <button type="button" class="btn btn-outline-dark" onclick="location.href='?controller=Secretaria&&action=index'">Volver a inicio</a>
        </div>
      </div>
    </div>
    </div>
</body>
</html>