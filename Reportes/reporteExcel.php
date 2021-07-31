<?php
use function PHPSTORM_META\type;
include "../Database/Reportes.php";
$connect = mysqli_connect($host, $usuario,$contraseña, $database);

            $consulta = "SELECT A.idVehiculo, A.placa, A.color , A.marca ,A.idTipo, A.idConductor ,A.idPropietario,B.nombre as nombreTipo,
            C.documento as documentoPropietario,C.primerNombre as primerNombrePro,
            C.segundoNombre as segundoNombrePro, C.apellido as apellidoPro,C.direccion as direccionPro,
            C.telefono as telefonoPro,C.ciudad as ciudadPro,D.documento as documentoCon,D.primerNombre as primerNombreCon,D.segundoNombre as segundoNombreCon,
             D.apellido as apellidoCon,D.direccion as direccionCon,D.telefono as telefonoCon,D.ciudad as ciudadCon FROM vehiculo as A
            INNER JOIN tipoVehiculo as B ON A.idTipo=b.idTipo
            INNER JOIN propietario as C ON A.idPropietario=C.idPropietario
            INNER JOIN conductor as D ON A.idConductor=D.idConductor";
            $result = mysqli_query($connect, $consulta);
header('Content-Type:application/xls');
header('Content-Disposition: attachment; filename="Reporte Vehiculos.xls"');

?>
   <table id="example" class="table table-striped table-bordered" style="width:100%">
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
            <?php while ($value = mysqli_fetch_array($result)) {
            ?>
                <tr>

                    <td><?= $value['placa'] ?></td>
                    <td><?= $value['marca'] ?></td>
                    <td><b>CC:</b><?= $value['documentoCon'] ?> <b> Nombre:</b> <?= $value['primerNombreCon'] ?> <?= $value['segundoNombreCon'] ?> <?= $value['apellidoCon'] ?></td>
                    <td><b>CC:</b><?= $value['documentoPropietario'] ?> <b> Nombre:</b> <?= $value['primerNombrePro'] ?> <?= $value['segundoNombrePro'] ?> <?= $value['apellidoPro'] ?></td>
                    <td><?= $value['nombreTipo'] ?></td>
                 
                </tr>
            <?php } ?>
        </tbody>
    </table>