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
class M_propietario
{

    //Variables Del Modelo
    private $idPropietario;
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
    public function allPropietario()
    {
        $sql = "SELECT * FROM propietario";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }
    public function buscarPropietarioId()
    {
        $sql = "SELECT * FROM propietario where idPropietario='$this->idPropietario'";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }
    public function insertPropietario()
    {
        $sql = "INSERT INTO propietario                          
                        (documento,primerNombre,segundoNombre,apellido,direccion,telefono,ciudad)
                VALUES 
                        ('$this->documento','$this->primerNombre','$this->segundoNombre','$this->apellido','$this->direccion','$this->telefono','$this->ciudad')";

        $con = $this->con->conectar()->query($sql);
        return $con;
    }

    public function deletePropietario()
    {
        $sql = "DELETE FROM propietario where idPropietario='$this->idPropietario'";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }

    public function updatePropietario()
    {
        $sql = "UPDATE 
                    propietario 
                SET 
                    documento='$this->documento',
                     primerNombre='$this->primerNombre',
                     segundoNombre='$this->segundoNombre',
                     apellido='$this->apellido',
                     direccion='$this->direccion',
                     telefono='$this->telefono',
                     ciudad='$this->ciudad'                   
                where 
                    idPropietario='$this->idPropietario'";
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
