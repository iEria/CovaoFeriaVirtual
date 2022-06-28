<?php

include "../DAL/Conexion.php";
include "../Entidades/UsuarioEnt.php";
include "../DAL/UsuarioDAL.php";

$usuario = new UsuarioEnt();
$usuarioDAL = new UsuarioDAL();

//Agarra los datos
$usuario->setCedula($_POST['txtCedula']);
$usuario->setContrasena($_POST['txtContrasena']);


if($usuarioDAL->InicioSesion($usuario)) 
{
    header("Location: ../GUI/AdmEspecialidades.php");
}
else
{
    header("Location: ../GUI/login.php");
}