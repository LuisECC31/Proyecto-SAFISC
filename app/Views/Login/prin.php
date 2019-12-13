<?php 
        session_start();
        $Usuario = $_SESSION ['Usuario'];
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Bienvenido mi estimado usuario: <b><?php echo $_SESSION['Usuario']; ?></b></p>
    </body>
</html>
