<?php

error_reporting(E_ALL);
include 'Models/M_vehiculo.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_vehiculo
 *
 * @author Michael
 */
class C_vehiculo extends Enrutador
{

    private $modelo;

    public function __construct()
    {
        $this->modelo = new M_vehiculo();
    }

    public function vw_Vehiculo()
    {
        session_start();
        $this->vista("cabecera");
        $this->vista("vehiculo");
    }

    public function vw_buscarVehiculoId()
    {
        session_start();
        $this->vista("cabecera");
        $this->vista("buscarVehiculo");
    }
    

    public function vw_eliminarVehiculo()
    {
        $this->modelo->set("placa", $_GET['placa']);
        $this->modelo->set("idVehiculo", $_GET['idVehiculo']);
        $con = $this->modelo->deleteVehiculo();
        if ($con) {
            header("Location: " . url . "vehiculo/vw_Vehiculo?act=Se ha eliminado correctamente el Vehiculo   &alerta=alert-warning&id=" . $_POST['idVehiculo']);
        } else {
            header("Location: " . url . "vehiculo/vw_Vehiculo?act=Ha ocurrido un error en la eliminación del Vehiculo  &alerta=alert-danger&id=" . $_GET['idVehiculo']);
        }
    }
    public function vw_crearVehiculo()
    {
        $this->vista("cabecera");
        $this->vista("crearVehiculo");
    }
    public function vw_reporte()
    {
        $this->vista("cabecera");
        $this->vista("reporte");
    }
    public function vw_editarVehiculo()
    {        
        $this->vista("cabecera");
        $this->vista("editarVehiculo");       
    }
    public function buscarVehiculo()
    {
        $con = $this->modelo->allVehiculo();
        return $con;
    }
    public function buscarVehiculoById($idVehiculo)
    {
        $this->modelo->set("idVehiculo", $idVehiculo);
        $con = $this->modelo->buscarVehiculoId();
        return $con;
    }
    public function buscarVehiculosById($idVehiculo)
    {
        $this->modelo->set("idVehiculo", $idVehiculo);
        $con = $this->modelo->buscarVehiculosId();
        return $con;
    }
    public function buscarPropi()
    {
        $con = $this->modelo->allPropie();
        return $con;
    }
    public function buscarCondu()
    {
        $con = $this->modelo->allCond();
        return $con;
    }
    public function buscarTipo()
    {
        $con = $this->modelo->allTip();
        return $con;
    }
    public function actualizarVehiculo()
    {
        $this->modelo->set("idVehiculo", $_POST['idVehiculo']);
        $this->modelo->set("placa", $_POST['placa']);
        $this->modelo->set("color", $_POST['color']);
        $this->modelo->set("marca", $_POST['marca']);
        $this->modelo->set("idTipo", $_POST['idTipo']);
        $this->modelo->set("idConductor", $_POST['idConductor']);
        $this->modelo->set("idVehiculo", $_POST['idVehiculo']);
        $this->modelo->set("idPropietario", $_POST['idPropietario']);
        $con = $this->modelo->updateVehiculo();
        if ($con) {
            header("Location: " . url . "vehiculo/vw_Vehiculo?act=Se ha actualizado correctamente el vehiculo con placas &alerta=alert-success&id=" . $_POST['placa']);
        } else {
            header("Location: " . url . "vehiculo/vw_Vehiculo?act=Ha ocurrido un error en la actualizacion del vehiculo &alerta=alert-danger&id=" . $_POST['placa']);
        }
    }

    public function nuevoVehiculo()
    {
        $this->modelo->set("placa", $_POST['placa']);
        $this->modelo->set("color", $_POST['color']);
        $this->modelo->set("marca", $_POST['marca']);
        $this->modelo->set("idTipo", $_POST['idTipo']);
        $this->modelo->set("idConductor", $_POST['idConductor']);
        $this->modelo->set("idVehiculo", $_POST['idVehiculo']);
        $this->modelo->set("idPropietario", $_POST['idPropietario']);
        $con = $this->modelo->insertVehiculo();

        if ($con) {
            header("Location: " . url . "vehiculo/vw_Vehiculo?act=Se ha creado correctamente el vehiculo con placas &alerta=alert-success&id=" . $_POST['placa']);
        } else {
            header("Location: " . url . "vehiculo/vw_Vehiculo?act=Ha ocurrido un error en la creación del vehiculo con placas &alerta=alert-danger&id=" . $_POST['placa']);
        }
    }
}
