<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body class="p-3 mb-2 bg-light ">
<div class="container ">
 <div class="text-center py-5">
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="card-header bg-primary col-md-10 text-white" >
       <h2 class="mt-2">Añadir Usuario</h2></div>
    
    <form action="?controller=Usuario&&action=add" method="POST">
    <div class="card col-md-10">
            <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                <form>
                    <div class="form-group row">
                    <label for="Usuario" class="col-md-3 col-form-label right">Usuario:</label>
                    <div class="col-md-8">
                        <td><input type="text" class="form-control form-control-sm" name="Usuario" value="" size="30" placeholder="Usuario"required/></td>
                    </div></div>

                    <div class="form-group row">
                    <label for="password" class="col-md-3 col-form-label">Contraseña:</label>
                    <div class="col-md-8">
                    <td><input type="password" class="form-control form-control-sm" name="password" value="" size="30" placeholder="password"required/></td>
                    </div></div>

                    <div class="form-group row">
                    <label for="Nombre" class="col-md-3 col-form-label">Nombre:</label>
                    <div class="col-md-8">
                    <td><input type="text" class="form-control form-control-sm" name="Nombre" cols="40" rows="5"  value="" size="30" placeholder="Nombre" required></td>
                    </div></div>
                    <div class="form-group row">

                    <label for="Apellido" class="col-md-3 col-form-label">Apellido:</label>
                    <div class="col-md-8">
                    <td><input type="text" class="form-control form-control-sm" name="Apellido" cols="40" rows="5"  value="" size="30" placeholder="Apellido" required></td>
                    </div></div>
                    <div class="form-group row">
                    <label for="NombreR" class="col-md-3 col-form-label">Roles:</label>
                    <div class="col-md-8">
                    <select name="NombreR" class="form-control form-control-sm">
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
                    <div class="col-md-12">
                    <div class="form-group row ">
                    <div class="col-md-8">
                    <td  colspan="2"><input type="submit"  class="btn btn-outline-dark"   value="Enviar" name="Iniciar" /></td>
                    <button type="button" class="btn btn-outline-dark" onclick="location.href='?controller=Secretaria&&action=index'">Regresar</button>
                    </div>
                    </div>
                    </div>
                    </form>
                    </div></div>
</main>    
</div>
  </div>
    </body>
</html>
