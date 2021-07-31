<?php


$con = $this->buscarTipoId($_GET['idTipo']);

?>
<div class="container-fluid">
    <div class="col-sm-12">
        <center>
            <h1><b>Edición De Tipo De Vehiculo </b></h1>
        </center>
    </div>
    <form onsubmit="return Validar();" method="POST" action="<?= url ?>tipoVehiculo/actualizarTipo">
        <div class="row">
            <?php foreach ($con as $key => $value) { ?>


                <div class="form-group col-sm-3">
                    <label for="idTipo"># Registro:</label>
                    <input class="form-control" type="text" name="idTipo" id="idTipo" value="<?= $value['idTipo'] ?>" readonly />
                </div>
                <div class="form-group col-sm-3">
                    <label for="nombre">Nombre :</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" value="<?= $value['nombre'] ?>" />
                </div>



        </div>
        <div class="com-sm-12">

            <center>

                <input type="submit" value="Actualizar Tipo" class="btn btn-success" />
                <a title='Atras' class="btn btn-danger" href="<?= url ?>tipoVehiculo/vw_Tipo">Atras</a>

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