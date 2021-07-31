<?php




?>
<div class="container">
    <div class="row">
        <div class="col-sm-12" style="width: 100%">
        <center>
        <h1><b>Crear Un Nuevo Tipo De Vehiculo</b> </h1><br>
    </center>

    <br>
        </div>
    </div>
    <br>
    <form onsubmit="return Validar();" method="POST" action="<?= url ?>tipoVehiculo/nuevoTipo">
        
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <center>
            <label for="nombre">Nombre :</label>
            <input class="form-control" type="text" name="nombre" id="nombre" required>
            </center>
        </div>
        
        <div class="form-group col-sm-12">
            <br>
            <center>
                <input type="submit" class="btn btn-success" value="Guardar" />
                <input type="reset" class="btn btn-danger" value="Limpiar" />

                <a type="reset" class="btn btn-warning" href="<?= url ?>tipoVehiculo/vw_Tipo">Atras</a>
            </center>
        </div>
        

    </form>


 

 