<?php

class C_error extends Enrutador {

    public function index() {
        $this->vista("cabecera");
        echo "<div class='container'>
        <center>
        <br/>
        <h2>
        La url solicitada no se ha encontrado. 
		</h2>
        <br/>
        
        <a href='".url."' class='btn btn-success'>Ir a inicio</a>
        </center>
        </div>";
    }

}
