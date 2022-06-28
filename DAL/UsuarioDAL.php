<?php

class UsuarioDAL
{

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

    function BuscarIniciarSesion($usuario,$contrasena)
    {
        $usuarios = new UsuarioEnt();
        $conexion= new Conexion();

        $sql = "SELECT *  FROM `USUARIOS` WHERE `NOMBRE` = '$usuario'";
        echo $sql;
        $resultado=$conexion->Ejecutar($sql);

        if(mysqli_num_rows($resultado)>0)
        {
            while ($fila = $resultado->fetch_assoc())
            {
                $usuarios->setId($fila["ID"]);
                $usuarios->setnombre($fila["NOMBRE"]);
                $usuarios->setncontrasena($fila["CONTRASENA"]);
                
                if($contrasena==$usuarios->getcontrasena())
                {
                    $usuarios=true;
                }else
                {
                    $usuarios=null;
                }
            
            }
        }
        else
        {
           $usuarios=null;
        }
        $conexion->Cerrar();
        return $usuarios;
    }

   
}

