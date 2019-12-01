<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="POST">
            <table border="1">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Contraseña</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="Usuario" value="" size="30" /></td>
                        <td><input type="text" name="Contraseña" value="" size="30" /></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type="submit" value="Login" name="Iniciar" /></td>
                    </tr>
                </tbody>
            </table>
        </form>  
        <h1><?php if(isset($_GET['resp'])){echo $_GET['resp'];} ?></h1>   
    </body>
</html>
