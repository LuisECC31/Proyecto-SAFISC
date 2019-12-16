<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-12 px-4">
<div class="card-header .bg-light text-dark" >
       <center><h2 class="mt-2">Usuarios del Sistema</h2></div></center>
        <div class="table-responsive-md">
        <table class="table table-striped table-sm table-hover">
        <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre del usuario</th>
                    <th>Apellido del usuario</th>
                    <th>Nombre del Rol</th>
                    <th>Permiso del usuario</th>
                    <th>Opción</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($datos as $dato) { ?>
                    <tr>
                        <td><?php echo $dato["idUsuarios"] ?></td>
                        <td><?php echo $dato["Usuario"] ?></td>
                        <td><?php echo $dato["Nombre1"] ?></td>
                        <td><?php echo $dato["Apellido"] ?></td>
                        <td><?php echo $dato["Nombre2"] ?></td>
                        <td><?php echo $dato["Nombre3"] ?></td>
                        <form action="?controller=Usuario&&action=eliminar" method="POST">
                        <input type="hidden" name="idUsuarios" value=<?php echo $dato["idUsuarios"]?> >
                        <td><button type='submit' class="btn btn-outline-dark"><img type="image" src="/Imagenes/trashcan.png" width="25px" height="25px"/></button></td>
                        </form>                  
                    </tr>
                    <?php }
            ?>
            </tbody>
        </table>
        </div>
        <div class="col-lg-12">
        <div class="form-group col ">
        <div class="col-lg-6">
        <button type="button" class="btn btn-outline-dark" onclick="location.href='?controller=Secretaria&&action=index'">Regresar</button>
        </div></div></div>

</main>
</body>
</html>
