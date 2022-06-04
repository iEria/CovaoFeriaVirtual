<?php

class UsuarioDAL
{
    function BuscarLogin($usuario, $contrasena)
    {
        $usuario = new Usuario();
        $conexion = new Conexion();
        $sql = "SELECT * FROM `usuarios` WHERE `nombre` ='$usuario'";
        $resultado = $conexion->Ejecutar($sql);
        if (mysqli_num_rows($resultado) > 0) 
        {
            while ($fila = $resultado->fetch_assoc()) 
            {
                $usuario->setId($fila["ID"]);
                $usuario->setId($fila["NOMBRE"]);
                $usuario->setId($fila["CONTRASENA"]);
                if ($contrasena == $usuario->getcontrasena()) 
                {
                    $usuario = true;
                } 
                else 
                {
                    $usuario = null;
                }
            }
        } 
        else 
        {
            $usuario = null;
        }
    }
}
