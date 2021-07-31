<?php

error_reporting(E_ALL);
include 'Models/M_conductor.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_conductor
 *
 * @author Michael
 */
class C_conductor extends Enrutador
{

    private $modelo;

    public function __construct()
    {
        $this->modelo = new M_conductor();
    }
    public function index()
    {
        session_start();
        $this->vista("cabecera");        
            $this->vista("conductor");      
        
    }
    public function vw_Conductor()
    {
        session_start();
        $this->vista("cabecera");        
        $this->vista("conductor");        
    }

    public function vw_buscarConductorId()
    {
        session_start();
        $this->vista("cabecera");        
        $this->vista("buscarConductor");
    }

    public function vw_eliminarConductor()
    {
        $this->modelo->set("idConductor", $_GET['idConductor']);
        $con = $this->modelo->deleteConductor();        
        if ($con) {
            header("Location: " . url . "conductor/vw_Conductor?act=Se ha eliminado correctamente el Conductor &alerta=alert-warning&id=" . $_POST['idConductor']);
        } else {
            header("Location: " . url . "conductor/vw_Conductor?act=No Se Puede Eliminar El Conductor Ya Que Actualmente Conduce Un Vehículo &alerta=alert-danger&id=" . $_GET['idConductor']);
        }
    }
    public function vw_crearConductor()
    {        
        $this->vista("cabecera");
        $this->vista("crearConductor");       
    }
    public function vw_editarConductor()
    {        
        $this->vista("cabecera");
        $this->vista("editarConductor");       
    }
    public function buscarConductor()
    {
        $con = $this->modelo->allConductor();
        return $con;
    }
    public function buscarConductorById($idConductor)
    {
        $this->modelo->set("idConductor", $idConductor);
        $con = $this->modelo->buscarConductorId();
        return $con;
    }
    public function actualizarConductor()
    {       
        $this->modelo->set("idConductor", $_POST['idConductor']);
        $this->modelo->set("documento", $_POST['documento']);
        $this->modelo->set("primerNombre", $_POST['primerNombre']);
        $this->modelo->set("segundoNombre", $_POST['segundoNombre']);
        $this->modelo->set("apellido", $_POST['apellido']);        
        $this->modelo->set("direccion", $_POST['direccion']);
        $this->modelo->set("telefono", $_POST['telefono']);
        $this->modelo->set("ciudad", $_POST['ciudad']);
        $con = $this->modelo->updateConductor();
        if ($con) {
            header("Location: " . url . "conductor/vw_Conductor?act=Se ha actualizado correctamente el conductor con Cedula: &alerta=alert-success&id=" . $_POST['documento']." Nombre: ". $_POST['primerNombre']." ".$_POST['segundoNombre']." ".$_POST['apellido']);
        } else {
            header("Location: " . url . "conductor/vw_Conductor?act=Ha ocurrido un error en la actualizacion del conductor &alerta=alert-danger&id=" . $_POST['idConductor']);
        }
    }

    public function nuevoConductor()
    {
        $this->modelo->set("documento", $_POST['documento']);
        $this->modelo->set("primerNombre", $_POST['primerNombre']);
        $this->modelo->set("segundoNombre", $_POST['segundoNombre']);
        $this->modelo->set("apellido", $_POST['apellido']);        
        $this->modelo->set("direccion", $_POST['direccion']);
        $this->modelo->set("telefono", $_POST['telefono']);
        $this->modelo->set("ciudad", $_POST['ciudad']);
            $con = $this->modelo->insertConductor();

            if ($con) {
                header("Location: " . url . "conductor/vw_Conductor?act=Se ha creado correctamente el conductor con Cedula: &alerta=alert-success&id=" . $_POST['documento']." Nombre: ". $_POST['primerNombre']." ".$_POST['segundoNombre']." ".$_POST['apellido']);
            } else {
                header("Location: " . url . "conductor/vw_Conductor?act=Ha ocurrido un error en la creación del conductor &alerta=alert-danger&id=" . $_POST['idConductor']);
            }
        
    }

}
