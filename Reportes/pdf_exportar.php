<?php
include "../Database/Reportes.php";
$connect = mysqli_connect($host, $usuario, $contraseña, $database);

$query = "SELECT A.idVehiculo, A.placa, A.color , A.marca ,A.idTipo, A.idConductor ,A.idPropietario,B.nombre as nombreTipo,
        C.documento as documentoPropietario,C.primerNombre as primerNombrePro,
        C.segundoNombre as segundoNombrePro, C.apellido as apellidoPro,C.direccion as direccionPro,
        C.telefono as telefonoPro,C.ciudad as ciudadPro,D.documento as documentoCon,D.primerNombre as primerNombreCon,D.segundoNombre as segundoNombreCon,
         D.apellido as apellidoCon,D.direccion as direccionCon,D.telefono as telefonoCon,D.ciudad as ciudadCon FROM vehiculo as A
        INNER JOIN tipoVehiculo as B ON A.idTipo=b.idTipo
        INNER JOIN propietario as C ON A.idPropietario=C.idPropietario
        INNER JOIN conductor as D ON A.idConductor=D.idConductor";
$result = $connect->query($query);
?>

<html>

<head>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="jquery-3.2.1.min.js"></script>

</head>



<div class="col-sm-12">
    <center>
        <h3>Informe De Todos Los Vehiculos </h3>
    </center>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%; border:2px">
    <thead>
        <tr>

            <th>Placa</th>
            <th>Marca</th>
            <th>Conductor</th>
            <th>Propietario</th>
            <th>Tipo Vehiculo</th>
        </tr>
    </thead>
    <tbody id="myTable">
        <?php foreach ($result as $fila) { ?>

            <tr>

                <td><?= $fila['placa'] ?></td>
                <td><?= $fila['marca'] ?></td>
                <td><b>CC:</b><?= $fila['documentoCon'] ?> <b> Nombre:</b> <?= $fila['primerNombreCon'] ?> <?= $fila['segundoNombreCon'] ?> <?= $fila['apellidoCon'] ?></td>
                <td><b>CC:</b><?= $fila['documentoPropietario'] ?> <b> Nombre:</b> <?= $fila['primerNombrePro'] ?> <?= $fila['segundoNombrePro'] ?> <?= $fila['apellidoPro'] ?></td>
                <td><?= $fila['nombreTipo'] ?></td>

            </tr>
        <?php } ?>
    </tbody>
</table>

</div>

</html>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<style>
    table {
        width: 100%;
        border: 1;
        word-wrap: break-word;
    }

    td {
        width: 25%;
        border: 1px solid #000;

    }

    thead {
        font-weight: normal;
        font-family: Arial;
        font-size: 15px;
    }
</style>
<style>
    table {
        border: 1px;
    }

    td,
    th {

        border: 1px solid #000;
    }
</style>