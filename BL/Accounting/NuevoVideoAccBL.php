<?php

    include '../../DAL/Conexion.php';
    include '../../Entidades/Videos.php';
    include '../../DAL/VideosDAL.php';

    $video = new Videos(); //ENTIDAD
    $videoDAL = new VideosDAL(); //DAL

    //Agarra los datos
    $video->setDescripcion($_POST['txtDescripcion']);
    $video->setLink($_POST['txtUrl']);
    
    //Pasa los datos
    if($videoDAL->NuevoVideo($video))
        header("Location: ../../GUI/VdAccounting.php");//ok
    else
        header("Location: ../../GUI/MenuPrincipal.php"); //error

?>