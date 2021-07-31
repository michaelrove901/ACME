<?php

$con = $this->buscarPropi();
$con1 = $this->buscarCondu();
$con2 = $this->buscarTipo();


?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12" style="width: 100%">
            <center>
                <h1><b>Crear Nuevo Vehículo</b> </h1>
            </center>

            <br><br>
        </div>
    </div>
    <br>
    <form onsubmit="return Validar();" method="POST" action="<?= url ?>vehiculo/nuevoVehiculo">

        <div class="form-group col-sm-3">
            <label for="placa"># Placa :</label>
            <input class="form-control" type="text" name="placa" id="placa" required>
        </div>
        <div class="form-group col-sm-3">
            <label for="color">Color :</label>
            <input class="form-control" type="text" name="color" id="color" required>
        </div>

        <div class="form-group col-sm-3">
            <label for="marca">Marca :</label>
            <input class="form-control" type="text" name="marca" id="marca" required>
        </div>
        <div class="form-group col-sm-3">
            <label for="idTipo">Tipo :</label>
            
            <select name="idTipo" class="form-control" required>
            <?php foreach ($con2 as $key => $valueee) {
                    echo "<option  value='" . $valueee["idTipo"] . "'>" . $valueee["nombre"] . "</option>";
            }?>
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="idPropietario">Propietario :</label>

            <select name="idPropietario" class="form-control" required>

                <?php foreach ($con as $key => $value) {
                    echo "<option  value='" . $value["idPropietario"] . "'>" . 'CC: ' . $value["documento"] . ' Nombre: ' . $value["primerNombre"] . "</option>";
                } ?>
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="idConductor">Conductor :</label>
           
            <select name="idConductor" class="form-control" required>
            <?php foreach ($con1 as $key => $valuee) {
                    echo "<option  value='" . $valuee["idConductor"] . "'>" . 'CC: ' . $valuee["documento"] . ' Nombre: ' . $valuee["primerNombre"] . "</option>";
                } ?>
            </select>
        </div>


        <div class="form-group col-sm-12">
            <br>
            <center>
                <input type="submit" class="btn btn-success" value="Guardar" />
                <input type="reset" class="btn btn-danger" value="Limpiar" />

                <a type="reset" class="btn btn-warning" href="<?= url ?>vehiculo/vw_Vehiculo">Atras</a>
            </center>
        </div>


    </form>