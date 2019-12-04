<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h2 class="mt-2">Login</h2>
    <form action="?controller=Login&&action=login" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="Usuario" class="col-md-4 col-form-label">Usuario:</label>
                    <div class="col-md-8">
                        <td><input type="text" name="Usuario" value="" size="30" /></td>
                    </div>
                    <label for="Contraseña" class="col-md-4 col-form-label">Contraseña:</label>
                    <div class="col-md-8">
                    <td><input type="text" name="Contraseña" value="" size="30" /></td>
                    </div>
                </div>
            </div>
            <td align="center" colspan="2"><input type="submit" value="Login" name="Iniciar" /></td>
    </form>
</main>    
    </body>
</html>
