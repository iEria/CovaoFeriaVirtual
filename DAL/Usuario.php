<?php

class AdministradorDAL
{

    function BuscarUsuario($id)
    {
        $usuario = new Usuario();
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



   
}

