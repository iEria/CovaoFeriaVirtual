<?php

class UsuarioDAL
{
/*
    function BuscarUsuario($id)
    {
        $usuario = new UsuarioEnt();
        $conexion= new Conexion();

        $sql = "SELECT *  FROM `USUARIOS` WHERE `ID` = '$id'";
        $resultado=$conexion->Ejecutar($sql);

        if(mysqli_num_rows($resultado)>0)
        {
            while ($fila = $resultado->fetch_assoc())
            {
                $usuario->setId($fila["ID"]);
                $usuario->setnombre($fila["NOMBRE"]);
                $usuario->setncontrasena($fila["CONTRASENA"]);
            }
        }
        else
        {
           $usuario=null;
        }
        $conexion->Cerrar();
        return $usuario;
    }
    */

    function InicioSesion(UsuarioEnt $usuario)
    {
        $conexion = new Conexion();
        $sql = "SELECT u.* FROM USUARIO u WHERE u.CEDULA = '".$usuario->getCedula()."' AND u.CONTRASENA = '".$usuario->getContrasena()."' ";

        $resultado = $conexion->Ejecutar($sql);
        if (mysqli_num_rows($resultado) > 0) {
            $data = array();
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $data[] = $fila;
            }

            header('Content-Type: application/json');
            return json_encode($data);
        }
        else
        {
            $data=null;
        }
        $conexion->Cerrar();
        return $data;
    }

   
}

