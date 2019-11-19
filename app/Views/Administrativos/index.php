<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <h2 class="mt-2">Administrativos</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $dato) { ?>
                    <tr>
                        <td><?php echo $dato["idadministrativos"] ?></td>
                        <td><?php echo $dato["cedula"] ?></td>
                        <td><?php echo $dato["primer_nombre"] . ' ' . $dato["segundo_nombre"] ?></td>
                        <td><?php echo $dato["primer_apellido"] . ' ' . $dato["segundo_apellido"] ?></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</main>