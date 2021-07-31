<?php

error_reporting(E_ALL);
include 'Models/M_reporte.php';
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
class C_reporte extends Enrutador
{

    private $modelo;

    public function __construct()
    {
        $this->modelo = new M_reporte();
    }

    public function vw_Reporte()
    {
        session_start();
        $this->vista("pdf");
    }
    public function ReporteGeneral()
    {
        session_start();
        $this->vista("cabecera");
        $this->vista("reporteGeneral");
    }
    public function reportePDF()
    {
        $con = $this->modelo->Reporte();
        return $con;
    }
    public function vw_ReporteEx()
    {
        session_start();
        $this->vista("reporteExcel.php");
    }
    public function vehiculosInscritos()
    {
        $con = $this->modelo->vehiInscritos();
        return $con;
    }
    public function conductoresInscritos()
    {
        $con = $this->modelo->conduInscritos();
        return $con;
    }
    public function propietariosInscritos()
    {
        $con = $this->modelo->propiInscritos();
        return $con;
    }
}
