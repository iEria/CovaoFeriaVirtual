<?php
class VideosDAL
{
    function NuevoVideo(VideosEnt $video)
    {
        $estado = false;
        $conexion = new Conexion();
        $sql = "INSERT INTO `VIDEOS`(`LINK`, `IDESPECIALIDAD`) VALUES ('".$video->getLink()."', '6')";
        if($conexion -> Ejecutar($sql))
        {
            $estado = true;
        }
        $conexion->Cerrar();
        return $estado;
    }
}