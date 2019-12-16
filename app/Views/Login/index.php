<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
        <title></title>
    </head>

<body class="p-3 mb-2 bg-light ">
    <div class="container ">
        <div class="text-center py-5">
         <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
         <div class="card-header bg-primary col-md-10 text-white text-center" >
               <h2 class="mt-2">Login</h2> </div>
            <form action="?controller=Login&&action=login" method="POST">
            <div class="card col-md-10">
           <div class="card-body ">
                <div class="row">
                    <div class="col-md-10">

                        <div class="form-group row ">
                            <label for="Usuario" class="col-md-4 col-form-label ">Usuario:</label>
                            <div class="col-md-8">
                                <td><input type="text" class="form-control form-control-sm" name="Usuario" value="" size="30" placeholder="Usuario"/></td>
                            </div> </div>

                            <div class="form-group row">
                            <label for="Contraseña" class="col-md-4 col-form-label">Contraseña:</label>
                            <div class="col-md-8">
                            <td><input type="password" class="form-control form-control-sm" name="Contraseña" value="" size="30" placeholder="Contraseña"/></td>
                            </div></div>

                            <div class="form-group row">
                            <div class="col-md-8">
                            <td  colspan="2"><input class="btn btn-primary" type="submit" value="Iniciar sesión" name="Iniciar" /></td>
                             </div></div>
                            
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </form>
         </main>  
        </div>
    </div>  
</body>
</html>
