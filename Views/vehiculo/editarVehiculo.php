<?php
$connect = mysqli_connect("localhost", "root", "", "acme");

$con = $this->buscarVehiculoById($_GET['idVehiculo']);
$con1 = $this->buscarPropi();
$con2 = $this->buscarCondu();
$con3 = $this->buscarTipo();

?>
<div class="container-fluid">
    <center>
        <h1><b>Edicion De Vehículo</b> </h1>
    </center>

    <br><br>
    <form onsubmit="return Validar();" method="POST" action="<?= url ?>vehiculo/actualizarVehiculo">
        <div class="row">
            <?php foreach ($con as $key => $value) { ?>


                <div class="form-group col-sm-1">
                    <label for="idVehiculo"># Registro:</label>
                    <input class="form-control" type="text" name="idVehiculo" id="idVehiculo" value="<?= $value['idVehiculo'] ?>" readonly />
                </div>
                <div class="form-group col-sm-3">
                    <label for="placa">Placa:</label>
                    <input class="form-control" type="text" name="placa" id="placa" value="<?= $value['placa'] ?>" />
                </div>

                <div class="form-group col-sm-3">
                    <label for="color">Color : </label>
                    <input class="form-control" type="text" name="color" id="color" value="<?= $value['color'] ?>" />
                </div>

                <div class="form-group col-sm-3">
                    <label for="marca">Marca :</label>
                    <input class="form-control" type="text" name="marca" id="marca" value="<?= $value['marca'] ?>">
                </div>
                <div class="form-group col-sm-2">
                    <label for="idTipo">Tipo Vehiculo : </label>
                    <select name="idTipo" class="form-control" required>
                        <option value="<?= $value['idTipo'] ?>"><?= $value['nombreTipo'] ?></option>
                        <?php foreach ($con3 as $key => $valueee) {
                            echo "<option  value='" . $valueee["idTipo"] . "'>" . $valueee["nombre"] . "</option>";
                        } ?>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="idConductor">Conductor : </label>
                    
                    <select name="idConductor" class="form-control" required>
                        <option value="<?= $value['idConductor'] ?>">CC: <?= $value['documentoCon'] ?> Nombre: <?= $value['primerNombreCon'] ?></option>
                        <?php foreach ($con2 as $key => $valuee) {
                    echo "<option  value='" . $valuee["idConductor"] . "'>" . 'CC: ' . $valuee["documento"] . ' Nombre: ' . $valuee["primerNombre"] . "</option>";
                } ?>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="idPropietario">Propietario : </label>

                    <select name="idPropietario" class="form-control" required>
                        <option value="<?= $value['idPropietario'] ?>">CC: <?= $value['documentoPropietario'] ?> Nombre: <?= $value['primerNombrePro'] ?></option>
                        <?php foreach ($con1 as $key => $value) {
                            echo "<option  value='" . $value["idPropietario"] . "'>" . 'CC: ' . $value["documento"] . ' Nombre: ' . $value["primerNombre"] . "</option>";
                        } ?>
                    </select>
                </div>
        </div>


        <br>

        <center>

            <input type="submit" value="Actualizar Vehiculo" class="btn btn-success" />
            <a title='Atras' class="btn btn-danger" href="<?= url ?>vehiculo/vw_Vehiculo">Atras</a>

        </center>

</div>

<?php } ?>

</div>


</form>

</div>

<style>
    #option {

        color: #fff;

    }
</style>