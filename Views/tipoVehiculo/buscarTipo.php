<?php

$con = $this->buscarTipoId($_GET['idTipo']);
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
<div class="container">

        <?php foreach ($con as $key => $value) { ?>
            <h2>A Continuacion Encontraras La Informacion Detallada De Los Tipos De Vehiculos: </h2>
            
            <div class="form-group col-sm-3">
                <label for="idTipo"># Tipo</label>
                <input class="form-control" type="text" name="idTipo" id="idTipo" value="<?= $value['idTipo'] ?>" disabled>
            </div>
            <div class="form-group col-sm-3">
                <label for="nombre">Nombre</label>
                <input class="form-control" type="text" name="nombre" id="nombre" readonly value="<?= $value['nombre'] ?>" />
            </div>

            

        <?php } ?>

        <div class="col-sm-12">
                <br>
                <center>
                    <a title='Volver' class='btn btn-danger ' href="<?= url ?>conductor/vw_Conductor">Volver</a>  
                </center>
            </div>
</div>