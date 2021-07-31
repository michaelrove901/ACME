<?php
$con = $this->buscarPropietario();
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
        <h1><b>Propietarios Inscritos En Nuestro Sistema ACME</b> </h1><br>
    </center>

    <br>
    <center>
        <a title='Crear Propietario' class='btn btn-info' href="<?= url ?>propietario/vw_crearPropietario">
            <span class="glyphicon glyphicon-user"></span> Crear Nuevo Propietario
        </a>
    </center>
    <br><br>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>

                <th>Documento</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Apellidos</th>
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
                        <a title='Ver Propietario' class='btn btn-success' href="<?= url ?>propietario/vw_buscarPropietarioId?idPropietario=<?= $value['idPropietario'] ?>">
                            <span class="glyphicon glyphicon-search"></span> Ver
                        </a>

                        <a title='Editar Propietario' class='btn btn-primary' href="<?= url ?>propietario/vw_editarPropietario?idPropietario=<?= $value['idPropietario'] ?>">
                            <span class="glyphicon glyphicon-pencil"></span> Editar
                        </a>
                        <a onclick="return ConfirmDelete()" title='Eliminar Propietario' class='btn btn-danger' href="<?= url ?>propietario/vw_eliminarPropietario?idPropietario=<?= $value['idPropietario'] ?>">
                            <span class="glyphicon glyphicon-trash"></span> Eliminar
                        </a>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>

<script>
    function ConfirmDelete() {
        var respuesta = confirm("Estas Seguro Que Deseas Eliminar El Propietario");
        if (respuesta == true) {
            return true;

        } else {
            return false;
        }

    }
</script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>