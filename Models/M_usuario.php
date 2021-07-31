<?php

include 'Database/Conexion.php';

class M_usuario
{

    private $id;
    private $con;
    private $usuario;
    private $clave;
    private $password;

    public function __construct()
    {
        $this->con = new Conexion();
    }

    public function all()
    {
        $sql = "SELECT * FROM usertbl";
        $con = $this->con->conectar()->query($sql);
        return $con;
    }

    public function verificarUsuario()
    {

        $sql = "SELECT * "
            . "FROM "
            . "usertbl WHERE username='$this->usuario' AND password='$this->clave'"
            . "LIMIT 1";

        $con = $this->con->conectar()->query($sql);
        if (mysqli_num_rows($con) > 0) {
            return $con;
        } else {
            header("location:" . url . "?validar=Usuario o contraseña incorrecta.");
        }
    }

    public function cambiarClave()
    {

        $sql = "SELECT * "
            . "FROM "
            . "usertbl WHERE id='$this->id'"
            . "LIMIT 1";

        $con = $this->con->conectar()->query($sql);
        if (mysqli_num_rows($con) > 0) {
            return $con;
        } else {
            header("location:" . url . "?validar=Error Algun Dato No Existe");
        }
    }

    public function updateClave()
    {

        $sql = "UPDATE 
                        usertbl
                SET  
                        password='$this->password'
                WHERE
                        id = '$this->id'";

        $con = $this->con->conectar()->query($sql);
        return $con;
    }

    public function buscarEmpleado()
    {

        $sql = "SELECT * FROM `usertbl` WHERE username='$this->usuario'";


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
