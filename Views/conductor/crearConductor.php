<?php




?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12" >
        <center>
        <h1><b>Registrar Un Nuevo Conductor</b> </h1><br>
    </center>

    <br>
        </div>
    </div>
    <br>
    <form onsubmit="return Validar();" method="POST" action="<?= url ?>conductor/nuevoConductor">

        <div class="form-group col-sm-3">
            <label for="documento"># Documento :</label>
            <input class="form-control" type="number" name="documento" id="documento" required>
        </div>
        <div class="form-group col-sm-3">
            <label for="primerNombre">Primer Nombre :</label>
            <input class="form-control" type="text" name="primerNombre" id="primerNombre" required>
        </div>

        <div class="form-group col-sm-3">
            <label for="segundoNombre">Segundo Nombre :</label>
            <input class="form-control" type="text" name="segundoNombre" id="segundoNombre">
        </div>
        <div class="form-group col-sm-3">
            <label for="apellido">Apellidos :</label>
            <input class="form-control" type="text" name="apellido" id="apellido" required>
        </div>
        <div class="form-group col-sm-3">
            <label for="telefono">Telèfono :</label>
            <input class="form-control" type="number" name="telefono" id="telefono" required>
        </div>
        <div class="form-group col-sm-3">
            <label for="direccion">Direcciòn :</label>
            <input class="form-control" type="text" name="direccion" id="direccion" required>
        </div>
        <div class="form-group col-sm-3">
            <label for="ciudad">Ciudad :</label>
            <select class="form-control" id="ciudad" name="ciudad" required>
                <option value=""></option>
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


        <div class="form-group col-sm-12">
            <br>
            <center>
                <input type="submit" class="btn btn-success" value="Guardar" />
                <input type="reset" class="btn btn-danger" value="Limpiar" />

                <a type="reset" class="btn btn-warning" href="<?= url ?>conductor/vw_Conductor">Atras</a>
            </center>
        </div>


    </form>