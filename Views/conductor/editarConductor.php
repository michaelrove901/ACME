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
                        <option value="Bogotá">Bogotá</option>
                        <option value="Bucaramanga">Bucaramanga</option>
                        <option value="Cali">Cali</option>
                        <option value="Cartagena">Cartagena</option>
                        <option value="Cúcuta">Cúcuta</option>
                        <option value="Florencia">Florencia</option>
                        <option value="Ibagué">Ibagué</option>
                        <option value="Leticia">Leticia</option>
                        <option value="Manizales">Manizales</option>
                        <option value="Medellín">Medellín</option>
                        <option value="Mitú">Mitú</option>
                        <option value="Mocoa">Mocoa</option>
                        <option value="Montería">Montería</option>
                        <option value="Neiva">Neiva</option>
                        <option value="Pasto">Pasto</option>
                        <option value="Pereira">Pereira</option>
                        <option value="Popayán">Popayán</option>
                        <option value="Puerto Carreño">Puerto Carreño</option>
                        <option value="Puerto Inírida">Puerto Inírida</option>
                        <option value="Quibdó">Quibdó</option>
                        <option value="Riohacha">Riohacha</option>
                        <option value="San Andrés">San Andrés</option>
                        <option value="San José del Guaviare">San José del Guaviare</option>
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