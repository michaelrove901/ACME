<?php

$con = $this->buscarPropietarioById($_GET['idPropietario']);
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

        <?php foreach ($con as $key => $value) { ?>
            <div class="col-sm-12">
                <center>
            <h1>Informacion Detallada Del Propietario: <b><?= $value['primerNombre'] ?> <?= $value['segundoNombre'] ?> <?= $value['apellido'] ?></b></h1><br><br>
            </center>    
        </div>
            <div class="form-group col-sm-3">
                <label for="documento">Documento</label>
                <input class="form-control" type="text" name="documento" id="documento" value="<?= $value['documento'] ?>" disabled>
            </div>
            <div class="form-group col-sm-2">
                <label for="idPropietario"># Registro</label>
                <input class="form-control" type="text" name="idPropietario" id="idPropietario" readonly value="<?= $value['idPropietario'] ?>" />
            </div>

            <div class="form-group col-sm-3">
                <label for="primerNombre">Primer Nombre</label>
                <input class="form-control" type="text" name="primerNombre" id="primerNombre" value="<?= $value['primerNombre'] ?>" disabled>
            </div>

            <div class="form-group col-sm-3">
                <label for="segundoNombre">Segundo Nombre </label>
                <input class="form-control" type="text" name="segundoNombre" value="<?= $value['segundoNombre'] ?>" disabled>
            </div>

            <div class="form-group col-sm-3">
                <label for="apellido">Apellidos </label>
                <input class="form-control" type="text" name="apellido" id="apellido" value="<?= $value['apellido'] ?>" disabled>
            </div>

            <div class="form-group col-sm-2">
                <label for="telefono">Telèfono</label>
                <input class="form-control" type="number" name="telefono" id="telefono" value="<?= $value['telefono'] ?>" disabled />
            </div>

            <div class="form-group col-sm-3">
                <label for="direccion">Direcciòn</label>
                <input class="form-control" type="text" name="direccion" id="direccion" value="<?= $value['direccion'] ?>" disabled>
            </div>

            <div class="form-group col-sm-3">
                <label for="ciudad">Ciudad</label>
                <input class="form-control" type="text" name="ciudad" id="ciudad" value="<?= $value['ciudad'] ?>" disabled>
            </div>

        <?php } ?>

        <div class="col-sm-12">
                <br>
                <center>
                    <a title='Volver' class='btn btn-danger ' href="<?= url ?>propietario/vw_Propietario">Volver</a>  
                </center>
            </div>
</div>