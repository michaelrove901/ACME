<?php
$con = $this->buscarTipo();
$connect = mysqli_connect("localhost", "root", "", "acme");
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
    <h1 ><b>Tipos De Vehículos Parametrizados En Nuestro Sistema ACME</b> </h1>
    </center>
 

    <br>
    <center>
    <a title='Crear Tipo' class='btn btn-info' href="<?= url ?>tipoVehiculo/vw_crearTipo">
        <span class="glyphicon glyphicon-briefcase"></span> Crear Nuevo Tipo De Vehículo
    </a>
    </center>
    <br><br>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>

                <th># Registro</th>
                <th>Tipo</th>
                <th>Acciones</th>
        </thead>
        <tbody id="myTable">
            <?php foreach ($con as $key => $value) {
            ?>
                <tr>

                    <td><?= $value['idTipo'] ?></td>
                    <td><?= $value['nombre'] ?></td>
                    <td>


                        <a title='Editar Tipo' class='btn btn-primary' href="<?= url ?>tipoVehiculo/vw_editarTipo?idTipo=<?= $value['idTipo'] ?>">
                            <span class="glyphicon glyphicon-pencil"></span> Editar
                        </a>
                        <a onclick="return ConfirmDelete()" title='Eliminar Tipo' class='btn btn-danger' href="<?= url ?>tipoVehiculo/vw_eliminarTipo?idTipo=<?= $value['idTipo'] ?>">
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
        var respuesta = confirm("Estas Seguro Que Deseas Eliminar El Tipo");
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