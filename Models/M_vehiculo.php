<?php

include 'Database/Conexion.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_vehiculo
 *
 * @author Michael Rodriguez
 */
class M_vehiculo
{

    //Variables Del Modelo
    private $idVehiculo;
    private $placa;
    private $color;
    private $marca;
    private $idTipo;
    private $idConductor;
    private $idPropietario;

    public function __construct()
    {
        $this->con = new Conexion();
    }
    public function allVehiculo()
    {
        $sql = "SELECT A.idVehiculo, A.placa, A.color , A.marca ,A.idTipo, A.idConductor ,A.idPropietario,B.nombre as nombreTipo,
        C.documento as documentoPropietario,C.primerNombre as primerNombrePro,
        C.segundoNombre as segundoNombrePro, C.apellido as apellidoPro,C.direccion as direccionPro,
        C.telefono as telefonoPro,C.ciudad as ciudadPro,D.documento as documentoCon,D.primerNombre as primerNombreCon,D.segundoNombre as segundoNombreCon,
         D.apellido as apellidoCon,D.direccion as direccionCon,D.telefono as telefonoCon,D.ciudad as ciudadCon FROM vehiculo as A
        LEFT JOIN tipoVehiculo as B ON A.idTipo=b.idTipo
        LEFT JOIN propietario as C ON A.idPropietario=C.idPropietario
        LEFT JOIN conductor as D ON A.idConductor=D.idConductor";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }
    public function buscarVehiculoId()
    {
        $sql = "SELECT A.idVehiculo, A.placa, A.color , A.marca ,A.idTipo, A.idConductor ,A.idPropietario,B.nombre as nombreTipo,
        C.documento as documentoPropietario,C.primerNombre as primerNombrePro,
        C.segundoNombre as segundoNombrePro, C.apellido as apellidoPro,C.direccion as direccionPro,
        C.telefono as telefonoPro,C.ciudad as ciudadPro,D.documento as documentoCon,D.primerNombre as primerNombreCon,D.segundoNombre as segundoNombreCon,
         D.apellido as apellidoCon,D.direccion as direccionCon,D.telefono as telefonoCon,D.ciudad as ciudadCon FROM vehiculo as A
        LEFT JOIN tipoVehiculo as B ON A.idTipo=b.idTipo
        LEFT JOIN propietario as C ON A.idPropietario=C.idPropietario
        LEFT JOIN conductor as D ON A.idConductor=D.idConductor
        WHERE A.idVehiculo='$this->idVehiculo'";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }
    public function buscarVehiculosId()
    {
        $sql = "SELECT A.idVehiculo, A.placa, A.color , A.marca ,A.idTipo, A.idConductor ,A.idPropietario,B.nombre as nombreTipo,
        C.documento as documentoPropietario,C.primerNombre as primerNombrePro,
        C.segundoNombre as segundoNombrePro, C.apellido as apellidoPro,C.direccion as direccionPro,
        C.telefono as telefonoPro,C.ciudad as ciudadPro,D.documento as documentoCon,D.primerNombre as primerNombreCon,D.segundoNombre as segundoNombreCon,
         D.apellido as apellidoCon,D.direccion as direccionCon,D.telefono as telefonoCon,D.ciudad as ciudadCon FROM vehiculo as A
        INNER JOIN tipoVehiculo as B ON A.idTipo=b.idTipo
        INNER JOIN propietario as C ON A.idPropietario=C.idPropietario
        INNER JOIN conductor as D ON A.idConductor=D.idConductor
         WHERE A.idVehiculo='$this->idVehiculo'";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }
    public function allPropie()
    {
        $sql = "SELECT * FROM propietario";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }
    public function allCond()
    {
        $sql = "SELECT * FROM conductor";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }
    public function allTip()
    {
        $sql = "SELECT * FROM tipovehiculo";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }
    public function insertVehiculo()
    {
        $sql = "INSERT INTO vehiculo                          
                        (placa,color,marca,idTipo,idConductor,idPropietario)
                VALUES 
                        ('$this->placa','$this->color','$this->marca','$this->idTipo','$this->idConductor','$this->idPropietario')";

        $con = $this->con->conectar()->query($sql);
        return $con;
    }

    public function deleteVehiculo()
    {
        $sql = "DELETE FROM vehiculo where idVehiculo='$this->idVehiculo'";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }

    public function updateVehiculo()
    {
        $sql = "UPDATE 
                    vehiculo 
                SET 
                    placa='$this->placa',
                     color='$this->color',
                     marca='$this->marca',
                     idTipo='$this->idTipo',
                     idConductor='$this->idConductor',
                     idPropietario='$this->idPropietario'                 
                where 
                    idVehiculo='$this->idVehiculo'";
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
