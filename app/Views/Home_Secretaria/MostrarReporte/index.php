<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<button type="button" class="btn btn-outline-dark" onclick="location.href='?controller=Secretaria&&action=index'">Regresar</button>
    <h2 class="mt-2">Reportes de daño</h2>
        <div class="table-responsive">
        <table class="table table-striped table-sm table-hover">
            <thead>
                <tr>
                    <th>Solicitante</th>
                    <th>Cedula</th>
                    <th>Descripción del daño</th>
                    <th>Tipo de daño</th>
                    <th>Lugar</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($datos as $dato) { ?>
                    <tr>
                        <td><?php echo $dato["Solicitante"] ?></td>
                        <td><?php echo $dato["Cedula"] ?></td>
                        <td><?php echo $dato["Descripcion_del_dano"] ?></td>
                        <td><?php echo $dato["Tipo_de_Dano"] ?></td>
                        <td><?php echo $dato["Lugar"] ?></td>                     
                    </tr>
            <?php }
            ?>
            </tbody>
        </table>
        </div>
</main>
</body>
</html>