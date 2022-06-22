<?php

class Conexion
{
    private $mysqli;

    function Ejecutar($query) //Conexion a la base de datos 
    {
        $user = "root";
        $pass = "";
        $db = "feriavirtual"; //Nombre de la base de datos
        if (!$this->mysqli = new mysqli('localhost', $user, $pass, $db)) {
            die('Error de conexion (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
        }
        $this->mysqli->autocommit(TRUE);
        $resultado=$this->mysqli->query($query);
        return $resultado;
    } 

    function Cerrar()
    {
        $this->mysqli->close();
    }
}
