<?php

error_reporting(E_ALL);
include 'Models/M_propietario.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_propietario
 *
 * @author Michael
 */
class C_propietario extends Enrutador
{

    private $modelo;

    public function __construct()
    {
        $this->modelo = new M_propietario();
    }
   
    public function vw_Propietario()
    {
        session_start();
        $this->vista("cabecera");
        $this->vista("propietario");
    }

    public function vw_buscarPropietarioId()
    {
        session_start();
        $this->vista("cabecera");
        $this->vista("buscarPropietario");
    }

    public function vw_eliminarPropietario()
    {
        $this->modelo->set("idPropietario", $_GET['idPropietario']);
        $con = $this->modelo->deletePropietario();
        if ($con) {
            header("Location: " . url . "propietario/vw_Propietario?act=Se ha eliminado correctamente el Propietario &alerta=alert-warning&id=" . $_POST['idPropietario']);
        } else {
            header("Location: " . url . "propietario/vw_Propietario?act=No Se Puede Eliminar El Propietario Ya Que Actualmente Tiene Un Vehículo &alerta=alert-danger&id=" . $_GET['idPropietario']);
        }
    }
    public function vw_crearPropietario()
    {
        $this->vista("cabecera");
        $this->vista("crearPropietario");
    }
    public function vw_editarPropietario()
    {        
        $this->vista("cabecera");
        $this->vista("editarPropietario");       
    }
    public function buscarPropietario()
    {
        $con = $this->modelo->allPropietario();
        return $con;
    }
    public function buscarPropietarioById($idPropietario)
    {
        $this->modelo->set("idPropietario", $idPropietario);
        $con = $this->modelo->buscarPropietarioId();
        return $con;
    }
    public function actualizarPropietario()
    {
        $this->modelo->set("idPropietario", $_POST['idPropietario']);
        $this->modelo->set("documento", $_POST['documento']);
        $this->modelo->set("primerNombre", $_POST['primerNombre']);
        $this->modelo->set("segundoNombre", $_POST['segundoNombre']);
        $this->modelo->set("apellido", $_POST['apellido']);
        $this->modelo->set("direccion", $_POST['direccion']);
        $this->modelo->set("telefono", $_POST['telefono']);
        $this->modelo->set("ciudad", $_POST['ciudad']);
        $con = $this->modelo->updatePropietario();
        if ($con) {
            header("Location: " . url . "propietario/vw_Propietario?act=Se ha creado correctamente el propietario con Cedula: &alerta=alert-success&id=" . $_POST['documento']." Nombre: ". $_POST['primerNombre']." ".$_POST['segundoNombre']." ".$_POST['apellido']);
        } else {
            header("Location: " . url . "propietario/vw_Propietario?act=Ha ocurrido un error en la actualizacion del propietario &alerta=alert-danger&id=" . $_POST['idPropietario']);
        }
    }

    public function nuevoPropietario()
    {
        $this->modelo->set("documento", $_POST['documento']);
        $this->modelo->set("primerNombre", $_POST['primerNombre']);
        $this->modelo->set("segundoNombre", $_POST['segundoNombre']);
        $this->modelo->set("apellido", $_POST['apellido']);
        $this->modelo->set("direccion", $_POST['direccion']);
        $this->modelo->set("telefono", $_POST['telefono']);
        $this->modelo->set("ciudad", $_POST['ciudad']);
        $con = $this->modelo->insertPropietario();

        if ($con) {
            header("Location: " . url . "propietario/vw_Propietario?act=Se ha creado correctamente el propietario con Cedula: &alerta=alert-success&id=" . $_POST['documento']." Nombre: ". $_POST['primerNombre']." ".$_POST['segundoNombre']." ".$_POST['apellido']);
        } else {
            header("Location: " . url . "propietario/vw_Propietario?act=Ha ocurrido un error en la creación del propietario &alerta=alert-danger&id=" . $_POST['idPropietario']);
        }
    }
}
