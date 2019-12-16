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
                    <th>ID</th>
                    <th>Solicitante</th>
                    <th>Cedula</th>
                    <th>Descripción del daño</th>
                    <th>Tipo de daño</th>
                    <th>Lugar</th>
                    <th>Opción</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($datos as $dato) { ?> 
                    <tr>
                        <td><?php echo $dato["idReportes_de_dano"] ?></td>
                        <td><?php echo $dato["Solicitante"] ?></td>
                        <td><?php echo $dato["Cedula"] ?></td>
                        <td><?php echo $dato["Descripcion_del_dano"] ?></td>
                        <td><?php echo $dato["Tipo_de_Dano"] ?></td>
                        <td><?php echo $dato["Lugar"] ?></td>
                        <form action="?controller=Reporte&&action=eliminar" method="POST">
                        <input type="hidden" name="idReportes_de_dano" value=<?php echo $dato["idReportes_de_dano"]?> >
                        <td><button type='submit' class="btn btn-outline-dark"><img type="image" src="/Imagenes/trashcan.png" width="25px" height="25px"/></button></td>
                        </form>
                    </tr>
            <?php }
            ?>
            </tbody>
        </table>
        </div>
    </form>

        
</main>
</body>
</html>