<?php

    include '../../DAL/Conexion.php';
    include '../../Entidades/Videos.php';
    include '../../DAL/VideosDAL.php';

    $video = new Videos(); //ENTIDAD
    $videoDAL = new VideosDAL(); //DAL

    //Agarra los datos
    $horario->setHoraInicio($_POST['txtHoraInicio']);
    $horario->setHoraFinal($_POST['txtHoraFin']);
    $horario->setAforo($_POST['txtAforo']);
    $horario->setfecha($_POST['txtFecha']);

    //Pasa los datos
    if($horarioDAL->NuevoHorario($horario))
        header("Location: ../../GUI/Horario.php");//ok
    else
        header("Location: ../../GUI/Horario.php"); //error

?>