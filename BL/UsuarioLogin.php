<?php

include "../DAL/Conexion.php";
include "../Entidades/UsuarioEnt.php";
include "../DAL/UsuarioDAL.php";

$usuario = new UsuarioEnt();
$usuarioDAL = new UsuarioDAL();

$usuarios=$_POST['usuarios'];
$contrasena=$_POST['contrasena'];

if($usuarioDAL->BuscarIniciarSesion($usuarios,$contrasena)
)
{
    header("Location: ../GUI/panelEspecialidades.php");
}
else
{
    header("Location: ../GUI/login.php");
}