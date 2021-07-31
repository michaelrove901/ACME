<?php

$con = $this->buscarVehiculoById($_GET['idVehiculo']);
$con1 = $this->buscarVehiculosById($_GET['idVehiculo']);
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
    <h1 ><b>Información Detallada Del Vehículo</b> </h1>
    </center>
   
    <br>
    <?php foreach ($con as $key => $value) { ?>
        <div class="col-sm-12">
            <center>
        <h3>A Continuacion Encontraras La Informacion Detallada Del Vehículo Con Placas :<b><?= $value['placa'] ?></b></h3><br><br>
        </center>
        </div>
        <div class="form-group col-sm-3">
            <label for="placa">Placa</label>
            <input class="form-control" type="text" name="placa" id="placa" value="<?= $value['placa'] ?>" disabled>
        </div>
        <div class="form-group col-sm-2">
            <label for="color">Color</label>
            <input class="form-control" type="text" name="color" id="color" readonly value="<?= $value['color'] ?>" />
        </div>

        <div class="form-group col-sm-3">
            <label for="marca">Marca</label>
            <input class="form-control" type="text" name="marca" id="marca" value="<?= $value['marca'] ?>" disabled>
        </div>


    <?php } ?>
    <?php foreach ($con1 as $key => $value) { ?>
        <div class="col-sm-12">
        <center>
            <h3>Información Del Propietario De Este Vehículo </h3><br><br>
    </center>
        </div>

        <div class="form-group col-sm-3">
            <label for="documentoPropietario">Documento</label>
            <input class="form-control" type="text" name="documento" id="documento" value="<?= $value['documentoPropietario'] ?>" disabled>
        </div>
      
        <div class="form-group col-sm-3">
            <label for="primerNombrePro">Primer Nombre</label>
            <input class="form-control" type="text" name="primerNombrePro" id="primerNombrePro" value="<?= $value['primerNombrePro'] ?>" disabled>
        </div>

        <div class="form-group col-sm-3">
            <label for="segundoNombrePro">Segundo Nombre </label>
            <input class="form-control" type="text" name="segundoNombrePro" value="<?= $value['segundoNombrePro'] ?>" disabled>
        </div>

        <div class="form-group col-sm-3">
            <label for="apellidoPro">Apellidos </label>
            <input class="form-control" type="text" name="apellidoPro" id="apellidoPro" value="<?= $value['apellidoPro'] ?>" disabled>
        </div>

        <div class="form-group col-sm-3">
            <label for="telefonoPro">Telèfono</label>
            <input class="form-control" type="number" name="telefonoPro" id="telefonoPro" value="<?= $value['telefonoPro'] ?>" disabled />
        </div>

        <div class="form-group col-sm-3">
            <label for="direccionPro">Direcciòn</label>
            <input class="form-control" type="text" name="direccionPro" id="direccionPro" value="<?= $value['direccionPro'] ?>" disabled>
        </div>

        <div class="form-group col-sm-3">
            <label for="ciudadPro">Ciudad</label>
            <input class="form-control" type="text" name="ciudadPro" id="ciudadPro" value="<?= $value['ciudadPro'] ?>" disabled>
        </div>

    <?php } ?>
    <?php foreach ($con1 as $key => $value) { ?>
        <div class="col-sm-12">
        <center>
            <h3>Información Del Conductor De Este Vehículo </h3><br><br>
    </center>
        </div>

        <div class="form-group col-sm-3">
            <label for="documentoCon">Documento</label>
            <input class="form-control" type="text" name="documentoCon" id="documentoCon" value="<?= $value['documentoCon'] ?>" disabled>
        </div>
      
        <div class="form-group col-sm-3">
            <label for="primerNombreCon">Primer Nombre</label>
            <input class="form-control" type="text" name="primerNombreCon" id="primerNombreCon" value="<?= $value['primerNombreCon'] ?>" disabled>
        </div>

        <div class="form-group col-sm-3">
            <label for="segundoNombreCon">Segundo Nombre </label>
            <input class="form-control" type="text" name="segundoNombreCon" value="<?= $value['segundoNombreCon'] ?>" disabled>
        </div>

        <div class="form-group col-sm-3">
            <label for="apellidoCon">Apellidos </label>
            <input class="form-control" type="text" name="apellidoCon" id="apellidoCon" value="<?= $value['apellidoCon'] ?>" disabled>
        </div>

        <div class="form-group col-sm-3">
            <label for="telefonoCon">Telèfono</label>
            <input class="form-control" type="number" name="telefonoCon" id="telefonoCon" value="<?= $value['telefonoCon'] ?>" disabled />
        </div>

        <div class="form-group col-sm-3">
            <label for="direccionCon">Direcciòn</label>
            <input class="form-control" type="text" name="direccionCon" id="direccionCon" value="<?= $value['direccionCon'] ?>" disabled>
        </div>

        <div class="form-group col-sm-3">
            <label for="ciudadCon">Ciudad</label>
            <input class="form-control" type="text" name="ciudadCon" id="ciudadCon" value="<?= $value['ciudadCon'] ?>" disabled>
        </div>

    <?php } ?>

    <div class="col-sm-12">
        <br>
        <center>
            <a title='Volver' class='btn btn-danger ' href="<?= url ?>vehiculo/vw_Vehiculo">Volver</a>
        </center>
    </div>
</div>