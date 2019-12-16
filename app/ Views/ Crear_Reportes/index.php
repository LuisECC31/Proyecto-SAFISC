
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">

        <title>Reporte de Daño</title>  
    </head>
<body class="p-3 mb-2 bg-light ">
<div class="container ">
 <div class="text-center py-5">
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="card-header bg-primary col-md-10 text-white" >
    <h2 class="mt-2">Crear Reporte</h2> </div>
    <form action="?controller=Reporte&&action=reporte" method="POST">
    <div class="card col-md-10">
        
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
            <form>
                <div class="form-group row">
                    <label for="Solicitante" class="col-md-3 col-form-label right">Solicitante:</label>
                    <div class="col-md-8">
                        <td><input type="text" class="form-control form-control-sm" name="Solicitante" value="" size="30" placeholder="Nombre Completo"/></td>
                    </div></div>
                    <div class="form-group row">
                    <label for="Cedula" class="col-md-3 col-form-label">Cédula:</label>
                    <div class="col-md-8">
                    <td><input type="text" class="form-control form-control-sm" name="Cedula" value="" size="30" placeholder="Cédula"/></td>
                    </div></div>
                    <div class="form-group row">
                    <label for="Descripcion_del_dano" class="col-md-3 col-form-label">Descripción del daño:</label>
                    <div class="col-md-8">
                    <td><textarea type="text" class="form-control form-control-sm"  name="Descripcion_del_dano" cols="40" rows="5"  value="" size="30" placeholder="Descripción"></textarea></td>
                    </div></div>
                    <div class="form-group row">
                    <label for="Descripcion_del_dano" class="col-md-3 col-form-label">Tipo del daño:</label>
                    <div class="col-md-8">
                    <select name="Tipo_de_Dano" class="form-control form-control-sm"  class="form-control form-control-sm">
                        <?php 
                            foreach($datos as $dato) {
						if($selid==$dato['Tipo_de_Dano']) {
							echo '<option value="'.$dato['Tipo_de_Dano'].'" selected="selected">'.$dato['Tipo_de_Dano'].'</option>';
						} else {
							echo '<option value="'.$dato['Tipo_de_Dano'].'">'.$dato['Tipo_de_Dano'].'</option>';
						}						
					}
                     ?>
                    </select>
                    </div></div>
                    <div class="form-group row">
                    <label for="Descripcion_del_dano" class="col-md-3 col-form-label">Ubicación:</label>
                    <div class="col-md-8">
                    <select name="Lugar" class="form-control form-control-sm">
                        <?php 
                            foreach($datos2 as $dato) {
						if($selid==$dato['Lugar']) {
							echo '<option value="'.$dato['Lugar'].'" selected="selected">'.$dato['Lugar'].'</option>';
						} else {
							echo '<option value="'.$dato['Lugar'].'">'.$dato['Lugar'].'</option>';
						}						
					}
                     ?>
                    </select>
                    </div></div>
                  
                      <div class="form-group row ">
                        <div class="col-md-8">
                          <td  colspan="2"><input type="submit"  class="btn btn-primary "   value="Cancelar" name="Cancelar" /></td>
                           <td  colspan="2"><input type="submit" class="btn btn-primary"  value="Enviar" name="Iniciar" /></td>    
                        </div>
                      </div>
                </div>
            </div> 
                </form>
                </div></div>
    </form>
</main>    

    </div>
  </div>


</body>
</html>

