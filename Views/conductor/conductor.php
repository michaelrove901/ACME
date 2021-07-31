<?php
$con = $this->buscarConductor();
?>
<div class="container-fluid">
    <?php if (isset($_GET['act']) && isset($_GET['alerta']) && isset($_GET['id'])) { ?>
        <div class="alert <?= $_GET['alerta'] ?>">
            <?php
            echo $_GET['act'] .
                $_GET['id'];
            ?>
        </div>
    <?php } ?>

</div>



<div class="container-fluid">
    <center>
        <h1><b>Conductores Inscritos En Nuestro Sistema ACME</b> </h1><br>
    </center>

    <br>
    <center><a title='Crear Conductor' class='btn btn-info' href="<?= url ?>conductor/vw_crearConductor">
        <span class="glyphicon glyphicon-user"></span> Crear Nuevo Conductor
    </a></center>
    <br><br>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>

                <th>Documento</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Apellido</th>
                <th>Telèfono</th>
                <th>Ciudad</th>
                <th>Acciónes</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php foreach ($con as $key => $value) {
            ?>
                <tr>

                    <td><?= $value['documento'] ?></td>
                    <td><?= $value['primerNombre'] ?></td>
                    <td><?= $value['segundoNombre'] ?></td>
                    <td><?= $value['apellido'] ?></td>
                    <td><?= $value['telefono'] ?></td>
                    <td><?= $value['ciudad'] ?></td>
                    <td>
                        <a title='Ver Conductor' class='btn btn-success' href="<?= url ?>conductor/vw_buscarConductorId?idConductor=<?= $value['idConductor'] ?>">
                            <span class="glyphicon glyphicon-search"></span> Ver
                        </a>

                        <a title='Editar Conductor' class='btn btn-primary' href="<?= url ?>conductor/vw_editarConductor?idConductor=<?= $value['idConductor'] ?>">
                            <span class="glyphicon glyphicon-pencil"></span> Editar
                        </a>
                        <a onclick="return ConfirmDelete()" title='Eliminar Conductor' class='btn btn-danger' href="<?= url ?>conductor/vw_eliminarConductor?idConductor=<?= $value['idConductor'] ?>">
                            <span class="glyphicon glyphicon-trash"></span> Eliminar
                        </a>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>


<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
