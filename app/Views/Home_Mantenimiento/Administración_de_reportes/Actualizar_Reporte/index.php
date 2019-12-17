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
    <form action="?controller=Reportemantenimiento&&action=actualizar" method="POST">
    <div class="card col-md-10">
        
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
            <form>
                <input type="hidden" name="idReportes_de_dano" value=<?php echo $dato["idReportes_de_dano"]?> >
                <div class="form-group row">
                    <label for="Observacion" class="col-md-3 col-form-label right">Observaciones de mantenimiento:</label>
                    <div class="col-md-8">
                        <td><textarea type="text" class="form-control form-control-sm"  name="Observacion" cols="40" rows="5"  value="" size="30" placeholder="Descripción" required></textarea></td>
                    </div></div>
                    <div class="form-group row">
                    <label for="Fecha_de_inspeccion" class="col-md-3 col-form-label">Fecha de inspección:</label>
                    <div class="col-md-8">
                    <td><input type="date" name="Fecha_de_inspeccion" value="<?php echo date('Y-m-d'); ?>" class="form-control form-control-sm" placeholder="AAAA-MM-DD" required/></td>
                    </div></div>
                    
                  
                      <div class="form-group row ">
                        <div class="col-md-8">
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

