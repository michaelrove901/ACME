<?php

include 'Database/Conexion.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_reporte
 *
 * @author Michael Rodriguez
 */
class M_reporte
{

    //Variables Del Modelo
    

    public function __construct()
    {
        $this->con = new Conexion();
    }

    public function Reporte()
    {
        $sql = "SELECT A.idVehiculo, A.placa, A.color , A.marca ,A.idTipo, A.idConductor ,A.idPropietario,B.nombre as nombreTipo,
        C.documento as documentoPropietario,C.primerNombre as primerNombrePro,
        C.segundoNombre as segundoNombrePro, C.apellido as apellidoPro,C.direccion as direccionPro,
        C.telefono as telefonoPro,C.ciudad as ciudadPro,D.documento as documentoCon,D.primerNombre as primerNombreCon,D.segundoNombre as segundoNombreCon,
         D.apellido as apellidoCon,D.direccion as direccionCon,D.telefono as telefonoCon,D.ciudad as ciudadCon FROM vehiculo as A
        INNER JOIN tipoVehiculo as B ON A.idTipo=b.idTipo
        INNER JOIN propietario as C ON A.idPropietario=C.idPropietario
        INNER JOIN conductor as D ON A.idConductor=D.idConductor";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }
    public function vehiInscritos()
    {
        $sql = "SELECT COUNT(idVehiculo) as vehiculo FROM vehiculo";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }
    public function propiInscritos()
    {
        $sql = "SELECT COUNT(idPropietario) as propietario FROM propietario";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }
    public function conduInscritos()
    {
        $sql = "SELECT COUNT(idConductor) as conductor FROM conductor";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }
    
    public function set($atr, $val)
    {
        $this->$atr = $val;
    }

    public function get($atr)
    {
        return $this->$atr;
    }
}
