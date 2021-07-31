<?php

include 'Models/M_usuario.php';

class C_usuario extends Enrutador {

    private $modelo;

    public function __construct() {
        $this->modelo = new M_usuario();
    }

    public function index() {
        session_start();

        $this->vista("cabecera");

        if (isset($_SESSION['usuario']) && isset($_SESSION['nombre']) ) {
            // header("Location: reporte/index");
            echo '<script>location.href ="vehiculo/vw_Vehiculo";</script>';
        } else {
            $this->vista("inicio");
        }
    }

    public function login() {

        if (isset($_POST['usuario']) && isset($_POST['clave'])) {

            $this->modelo->set("usuario", $_POST['usuario']);
            $this->modelo->set("clave", $_POST['clave']);
            $con = $this->modelo->verificarUsuario();

            foreach ($con as $key => $value) {

                if ($value['username'] != null && $value['password'] != null) {
                    $this->iniciarVariables($value['id'], $value['username'], $value['full_name']);
                } else {
                    echo 'Usuario o Contraseña incorrecta!!';
                }
            }
        } else {
            echo 'El usuario y Contraseña son requeridos!!';
        }
    }

    private function iniciarVariables($id1, $usuario,  $nombre) {
        session_start();
        $_SESSION['id1'] = $id1;
        $_SESSION['usuario'] = $usuario;
        $_SESSION['nombre'] = $nombre;



        header("location: " . url);
    }

    public function cerrarSesion() {
        session_start();

        if (!isset($_SESSION['usuario'])  && !isset($_SESSION['nombre'])) {
            header("location: " . url);
            session_destroy();
        } else {
            header("location: " . url);
            session_destroy();
        }
    }

   

}
