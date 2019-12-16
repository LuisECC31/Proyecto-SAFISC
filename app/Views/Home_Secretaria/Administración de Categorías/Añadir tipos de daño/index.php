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
       <h2 class="mt-2">Añadir tipo de daño</h2></div>
    
    <form action="?controller=Reporte&&action=Anadirdano" method="POST">
    <div class="card col-md-10">
            <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                <form>
                    <div class="form-group row">
                    <label for="Tipodedano" class="col-md-3 col-form-label right">Tipo de daño:</label>
                    <div class="col-md-8">
                        <td><input type="text" class="form-control form-control-sm" name="Tipodedano" value="" size="30" placeholder="Tipo"required/></td>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group row ">
                    <div class="col-md-8">
                    <td  colspan="2"><input type="submit"  class="btn btn-outline-dark"   value="Añadir" name="Iniciar" /></td>
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
