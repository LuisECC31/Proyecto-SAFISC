<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<button type="button" class="btn btn-outline-dark" onclick="location.href='?controller=Secretaria&&action=index'">Regresar</button>
    <h2 class="mt-2">Usuarios del Sistema</h2>
        <div class="table-responsive">
        <table class="table table-striped table-sm table-hover">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Nombre del usuario</th>
                    <th>Apellido del usuario</th>
                    <th>Nombre del Rol</th>
                    <th>Permiso del usuario</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($datos as $dato) { ?>
                    <tr>
                        <td><?php echo $dato["Usuario"] ?></td>
                        <td><?php echo $dato["Nombre1"] ?></td>
                        <td><?php echo $dato["Apellido"] ?></td>
                        <td><?php echo $dato["Nombre2"] ?></td>
                        <td><?php echo $dato["Nombre3"] ?></td>                    
                    </tr>
                    <?php }
            ?>
            </tbody>
        </table>
        </div>
</main>
</body>
</html>
