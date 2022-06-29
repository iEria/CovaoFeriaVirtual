<?php

    include '../../DAL/Conexion.php';
    include '../../Entidades/VideosEnt.php';
    include '../../DAL/VideosDAL.php';

    $video = new VideosEnt(); //ENTIDAD
    $videoDAL = new VideosDAL(); //DAL

    //Agarra los datos
    $video->setLink($_POST['txtUrl']);
    
    //Pasa los datos
    if($videoDAL->NuevoVideo($video))
        header("Location: ../../GUI/Accounting/VdAccounting.php");//ok
    else
        header("Location: ../../GUI/MenuPrincipal.php"); //error

?>