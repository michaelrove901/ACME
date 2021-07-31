<?php
$con = $this->buscarVehiculo();
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
    <h1 ><b>Vehículos Inscritos En Nuestro Sistema ACME</b> </h1>
    </center>
   
    <br><br>
    <div class="col-sm-12">
        <center>
    <a title='Crear Vehiculo' class='btn btn-info' href="<?= url ?>vehiculo/vw_crearVehiculo">
        <img src="<?= url ?>Resources/Imagenes/carros.png" width="32px" height="32px"> Crear Nuevo Vehículo

    </a>
    </center>
    </div>
    <br><br><br><br>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>

                <th>Placa</th>
                <th>Marca</th>
                <th>Conductor</th>
                <th>Propietario</th>
                <th>Tipo Vehículo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php foreach ($con as $key => $value) {
            ?>
                <tr>

                    <td><?= $value['placa'] ?></td>
                    <td><?= $value['marca'] ?></td>
                    <td><b>CC:</b><?= $value['documentoCon'] ?> <b> Nombre:</b> <?= $value['primerNombreCon'] ?> <?= $value['segundoNombreCon'] ?> <?= $value['apellidoCon'] ?></td>
                    <td><b>CC:</b><?= $value['documentoPropietario'] ?> <b> Nombre:</b> <?= $value['primerNombrePro'] ?> <?= $value['segundoNombrePro'] ?> <?= $value['apellidoPro'] ?></td>
                    <td><?= $value['nombreTipo'] ?></td>
                    <td>
                        <a title='Ver Vehiculo' class='btn btn-success' href="<?= url ?>vehiculo/vw_buscarVehiculoId?idVehiculo=<?= $value['idVehiculo'] ?>">
                            <span class="glyphicon glyphicon-search"></span> Ver
                        </a>

                        <a title='Editar Vehiculo' class='btn btn-primary' href="<?= url ?>vehiculo/vw_editarVehiculo?idVehiculo=<?= $value['idVehiculo'] ?>">
                            <span class="glyphicon glyphicon-pencil"></span> Editar
                        </a>
                        <a onclick="return ConfirmDelete()" title='Eliminar Vehiculo' class='btn btn-danger' href="<?= url ?>vehiculo/vw_eliminarVehiculo?idVehiculo=<?= $value['idVehiculo'] ?>&placa=<?= $value['placa'] ?>">
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
        var respuesta = confirm("Estas Seguro Que Deseas Eliminar El Vehiculo");
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