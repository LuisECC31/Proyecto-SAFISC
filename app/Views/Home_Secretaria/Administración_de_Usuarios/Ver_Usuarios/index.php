<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <h2 class="mt-2">Usuarios del Sistema</h2>
        <div class="table-responsive">
        <table class="table table-striped table-sm table-hover">
            <thead>
                <tr>
                    <th>ID Usuario</th>
                    <th>Usuario</th>
                    <th>Rol del usuario</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($datos as $dato) { ?>
                    <tr>
                        <td><?php echo $dato["idUsuarios"] ?></td>
                        <td><?php echo $dato["Usuario"] ?></td>
                        <td><?php echo $dato["Roles_idRoles"] ?></td>
                        <td><?php echo $dato["Nombre"] ?></td>
                        <td><?php echo $dato["Apellido"] ?></td>                     
                    </tr>
                    <?php }
            ?>
            </tbody>
        </table>
        </div>
</main>
</body>
</html>