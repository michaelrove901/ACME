<?php

include 'Database/Conexion.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_conductor
 *
 * @author Michael Rodriguez
 */
class M_conductor
{

    //Variables Del Modelo
    private $idConductor;
    private $documento;
    private $primerNombre;
    private $segundoNombre;
    private $apellido;
    private $direccion;
    private $telefono;
    private $ciudad;

    public function __construct()
    {
        $this->con = new Conexion();
    }
    public function allConductor()
    {
        $sql = "SELECT * FROM conductor";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }
    public function buscarConductorId()
    {
        $sql = "SELECT * FROM conductor where idConductor='$this->idConductor'";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }
    public function insertConductor()
    {
        $sql = "INSERT INTO conductor                          
                        (documento,primerNombre,segundoNombre,apellido,direccion,telefono,ciudad)
                VALUES 
                        ('$this->documento','$this->primerNombre','$this->segundoNombre','$this->apellido','$this->direccion','$this->telefono','$this->ciudad')";

        $con = $this->con->conectar()->query($sql);
        return $con;
    }

    public function deleteConductor()
    {
        $sql = "DELETE FROM conductor where idConductor='$this->idConductor'";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }

    public function updateConductor()
    {
        $sql = "UPDATE 
                    conductor 
                SET 
                    documento='$this->documento',
                     primerNombre='$this->primerNombre',
                     segundoNombre='$this->segundoNombre',
                     apellido='$this->apellido',
                     direccion='$this->direccion',
                     telefono='$this->telefono',
                     ciudad='$this->ciudad'                   
                where 
                    idConductor='$this->idConductor'";
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
