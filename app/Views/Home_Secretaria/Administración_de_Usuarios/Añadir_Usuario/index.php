<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<button type="button" class="btn btn-outline-dark" onclick="location.href='?controller=Secretaria&&action=index'">Regresar</button>
    <h2 class="mt-2">Añadir Usuario</h2>
    <form action="?controller=Usuario&&action=add" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="Usuario" class="col-md-4 col-form-label">Usuario:</label>
                    <div class="col-md-8">
                        <td><input type="text" name="Usuario" value="" size="30" placeholder="Usuario"/></td>
                    </div>

                    <label for="password" class="col-md-4 col-form-label">Contraseña:</label>
                    <div class="col-md-8">
                    <td><input type="password" name="password" value="" size="30" placeholder="password"/></td>
                    </div>

                    <label for="Nombre" class="col-md-4 col-form-label">Nombre:</label>
                    <div class="col-md-8">
                    <td><input type="text" name="Nombre" cols="40" rows="5"  value="" size="30" placeholder="Nombre"></td>
                    </div>

                    <label for="Apellido" class="col-md-4 col-form-label">Apellido:</label>
                    <div class="col-md-8">
                    <td><input type="text" name="Apellido" cols="40" rows="5"  value="" size="30" placeholder="Apellido"></td>
                    </div>

                    <label for="NombreR" class="col-md-4 col-form-label">Roles:</label>
                    <div class="col-md-8">
                    <select name="NombreR">
                        <?php 
                            foreach($datos1 as $dato) {
						if($selid==$dato['NombreR']) {
							echo '<option value="'.$dato['NombreR'].'" selected="selected">'.$dato['NombreR'].'</option>';
						} else {
							echo '<option value="'.$dato['NombreR'].'">'.$dato['NombreR'].'</option>';
						}						
					}
                    ?>
                    </select>
                    </div>
                    <div class="col-md-8">
                    <td  colspan="2"><input type="submit" value="Enviar" name="Iniciar" /></td>
                    </div>

                    </form>
</main>    
    </body>
</html>

