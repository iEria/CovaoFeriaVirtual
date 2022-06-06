<?php

include "../DAL/Conexion.php";
include "../Entidades/Usuario.php";
include "../DAL/UsuarioDAL.php";

$usuario = new Usuario();
$usuarioDAL = new UsuarioDAL();

$usuarios=$_POST['usuarios'];
$contrasena=$_POST['contrasena'];

if($usuarioDAL->BuscarIniciarSesion($usuarios,$contrasena);
)
{
   // header("Location: ../GUI/panelEspecialidades.php");
}
else
{
    //header("Location: ../GUI/login.php");
}