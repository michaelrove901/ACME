<?php

include 'Database/Conexion.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_propietario
 *
 * @author Michael Rodriguez
 */
class M_tipoVehiculo
{

    //Variables Del Modelo
    private $idTipo;
    private $nombre;

    public function __construct()
    {
        $this->con = new Conexion();
    }

    public function allTipo()
    {
        $sql = "SELECT * FROM tipoVehiculo";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }
    public function buscarTipoById()
    {
        $sql = "SELECT * FROM tipoVehiculo WHERE idTipo='$this->idTipo'";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }


    public function insertTipo()
    {
        $sql = "INSERT INTO tipoVehiculo                          
                        (nombre)
                VALUES 
                        ('$this->nombre')";

        $con = $this->con->conectar()->query($sql);
        return $con;
    }



    public function deleteTipo()
    {
        $sql = "DELETE FROM tipoVehiculo where idTipo='$this->idTipo'";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }   


    public function updateTipo()
    {
        $sql = "UPDATE 
                    tipoVehiculo 
                SET 
                    nombre='$this->nombre'
                    
                where 
                    idTipo='$this->idTipo'";
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
