<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h2 class="mt-2">Crear Reporte</h2>
    <form action="?controller=Login&&action=login" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="Solicitante" class="col-md-4 col-form-label">Solicitante:</label>
                    <div class="col-md-8">
                        <td><input type="text" name="Solicitante" value="" size="30" placeholder="Nombre Completo"/></td>
                    </div>

                    <label for="Cedula" class="col-md-4 col-form-label">Cédula:</label>
                    <div class="col-md-8">
                    <td><input type="text" name="Cedula" value="" size="30" placeholder="Cédula"/></td>
                    </div>

                    <label for="Descripcion_del_dano" class="col-md-4 col-form-label">Descripción del daño:</label>
                    <div class="col-md-8">
                    <td><textarea type="text" name="Descripcion_del_dano" cols="40" rows="5"  value="" size="30" placeholder="Descripción"></textarea></td>
                    </div>

                    <div class="col-md-8">
                    <td  colspan="2"><input type="submit" value="Enviar" name="Iniciar" /></td>
                    </div>
                </div>
            </div>
            
    </form>
</main>    
    </body>
</html>