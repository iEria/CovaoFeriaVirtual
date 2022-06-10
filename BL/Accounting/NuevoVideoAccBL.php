<?php

    include '../../DAL/Conexion.php';
    include '../../Entidades/Videos.php';
    include '../../DAL/VideosDAL.php';

    $video = new Videos(); //ENTIDAD
    $videoDAL = new VideosDAL(); //DAL

    //Agarra los datos
    $video->setDescripcion($_POST['txtHoraInicio']);
    $video->setLink($_POST['txtHoraFin']);
    
    //Pasa los datos
    if($horarioDAL->NuevoHorario($horario))
        header("Location: ../../GUI/Horario.php");//ok
    else
        header("Location: ../../GUI/Horario.php"); //error

?>