<?php

error_reporting(E_ALL);
include 'Models/M_tipoVehiculo.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_tipoVehiculo
 *
 * @author Michael
 */
class C_tipoVehiculo extends Enrutador
{

    private $modelo;

    public function __construct()
    {
        $this->modelo = new M_tipoVehiculo();
    }

    public function vw_Tipo()
    {
        session_start();
        $this->vista("cabecera");
        $this->vista("tipo");
    }

    public function vw_buscarTipoId()
    {
        session_start();
        $this->vista("cabecera");
        $this->vista("buscarTipo");
    }

    public function vw_eliminarTipo()
    {
        $this->modelo->set("idTipo", $_GET['idTipo']);
        $con = $this->modelo->deleteTipo();
        if ($con) {
            header("Location: " . url . "tipoVehiculo/vw_Tipo?act=Se ha eliminado correctamente el Tipo &alerta=alert-warning&id=" . $_POST['idTipo']);
        } else {
            header("Location: " . url . "tipoVehiculo/vw_Tipo?act=Ha ocurrido un error en la eliminación del Tipo &alerta=alert-danger&id=" . $_GET['idTipo']);
        }
    }
    public function vw_crearTipo()
    {
        $this->vista("cabecera");
        $this->vista("crearTipo");
    }
    public function vw_editarTipo()
    {        
        $this->vista("cabecera");
        $this->vista("editarTipo");       
    }
    public function buscarTipo()
    {
        $con = $this->modelo->allTipo();
        return $con;
    }
    public function buscarTipoId($idTipo)
    {
        $this->modelo->set("idTipo", $idTipo);
        $con = $this->modelo->buscarTipoById();
        return $con;
    }
    public function actualizarTipo()
    {
        $this->modelo->set("idTipo", $_POST['idTipo']);
        $this->modelo->set("nombre", $_POST['nombre']);
        $con = $this->modelo->updateTipo();
        if ($con) {
            header("Location: " . url . "tipoVehiculo/vw_Tipo?act=Se ha actualizado correctamente el tipo &alerta=alert-success&id=" . $_POST['idTipo']);
        } else {
            header("Location: " . url . "tipoVehiculo/vw_Tipo?act=Ha ocurrido un error en la actualizacion del tipo &alerta=alert-danger&id=" . $_POST['idTipo']);
        }
    }

    public function nuevoTipo()
    {
        $this->modelo->set("nombre", $_POST['nombre']);
        $con = $this->modelo->insertTipo();

        if ($con) {
            header("Location: " . url . "tipoVehiculo/vw_Tipo?act=Se ha creado correctamente el tipo &alerta=alert-success&id=" . $_POST['idTipo']);
        } else {
            header("Location: " . url . "tipoVehiculo/vw_Tipo?act=Ha ocurrido un error en la creación del tipo &alerta=alert-danger&id=" . $_POST['idTipo']);
        }
    }
}
