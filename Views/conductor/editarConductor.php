<?php


$con = $this->buscarConductorById($_GET['idConductor']);

?>
<div class="container-fluid">
    <form onsubmit="return Validar();" method="POST" action="<?= url ?>conductor/actualizarConductor">
    <center>
        <h1><b>Edicion De Conductor</b> </h1><br>
    </center>

    <br>
        <div class="row">
            <?php foreach ($con as $key => $value) { ?>


                <div class="form-group col-sm-3">
                    <label for="idConductor"># Registro:</label>
                    <input class="form-control" type="text" name="idConductor" id="idConductor" value="<?= $value['idConductor'] ?>" readonly />
                </div>
                <div class="form-group col-sm-3">
                    <label for="documento">Documento:</label>
                    <input class="form-control" type="text" name="documento" id="documento" value="<?= $value['documento'] ?>" />
                </div>

                <div class="form-group col-sm-3">
                    <label for="primerNombre">Primer Nombre : </label>
                    <input class="form-control" type="text" name="primerNombre" id="primerNombre" value="<?= $value['primerNombre'] ?>" />
                </div>

                <div class="form-group col-sm-3">
                    <label for="segundoNombre">Segundo Nombre :</label>
                    <input class="form-control" type="text" name="segundoNombre" id="segundoNombre" value="<?= $value['segundoNombre'] ?>">
                </div>
                <div class="form-group col-sm-3">
                    <label for="apellido">Apellido :</label>
                    <input class="form-control" type="text" name="apellido" id="apellido" value="<?= $value['apellido'] ?>">
                </div>
                <div class="form-group col-sm-3">
                    <label for="telefono">Telefono :</label>
                    <input class="form-control" type="text" name="telefono" id="telefono" value="<?= $value['telefono'] ?>">
                </div>
                <div class="form-group col-sm-3">
                    <label for="direccion">Direccion :</label>
                    <input class="form-control" type="text" name="direccion" id="direccion" value="<?= $value['direccion'] ?>">
                </div>
                <div class="form-group col-sm-3">
                    <label for="ciudad">Ciudad :</label>
                    <select class="form-control" id="ciudad" name="ciudad" required>
                        <option value="<?= $value['ciudad'] ?>"><?= $value['ciudad'] ?></option>
                        <option value="Arauca">Arauca</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Barranquilla">Barranquilla</option>
                        <option value="Bogot??">Bogot??</option>
                        <option value="Bucaramanga">Bucaramanga</option>
                        <option value="Cali">Cali</option>
                        <option value="Cartagena">Cartagena</option>
                        <option value="C??cuta">C??cuta</option>
                        <option value="Florencia">Florencia</option>
                        <option value="Ibagu??">Ibagu??</option>
                        <option value="Leticia">Leticia</option>
                        <option value="Manizales">Manizales</option>
                        <option value="Medell??n">Medell??n</option>
                        <option value="Mit??">Mit??</option>
                        <option value="Mocoa">Mocoa</option>
                        <option value="Monter??a">Monter??a</option>
                        <option value="Neiva">Neiva</option>
                        <option value="Pasto">Pasto</option>
                        <option value="Pereira">Pereira</option>
                        <option value="Popay??n">Popay??n</option>
                        <option value="Puerto Carre??o">Puerto Carre??o</option>
                        <option value="Puerto In??rida">Puerto In??rida</option>
                        <option value="Quibd??">Quibd??</option>
                        <option value="Riohacha">Riohacha</option>
                        <option value="San Andr??s">San Andr??s</option>
                        <option value="San Jos?? del Guaviare">San Jos?? del Guaviare</option>
                        <option value="Santa Marta">Santa Marta</option>
                        <option value="Sincelejo">Sincelejo</option>
                        <option value="Tunja">Tunja</option>
                        <option value="Valledupar">Valledupar</option>
                        <option value="Villavicencio">Villavicencio</option>
                        <option value="Yopal">Yopal</option>
                    </select>
                </div>
        </div>


        <br>

        <center>

            <input type="submit" value="Actualizar Conductor" class="btn btn-success" />
            <a title='Atras' class="btn btn-danger" href="<?= url ?>conductor/vw_Conductor">Atras</a>

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