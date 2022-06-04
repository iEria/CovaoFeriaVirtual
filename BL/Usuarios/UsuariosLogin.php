<?php
include '../../DAL/Conexion.php';
include '../../Entidades/Usuario.php';
include '../../DAL/UsuariosDAL.php';


$usuario= new Usuario();
$usuarioDAL = new UsuarioDAL();

$usuario=$_POST['usuarios'];
$contrasena=$_POST['contrasena'];


if($usuarioDAL->BuscarLogin($usuario,$contrasena))
{
    header("Location: ../GUI/Menu.php");
}
else
{
    header("Location: ../GUI/index.php");
}

