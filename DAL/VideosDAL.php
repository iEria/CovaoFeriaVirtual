<?php
class VideosDAL
{
    function NuevoVideo(Videos $video)
    {
        $estado = false;
        $conexion = new Conexion();
        $sql = "INSERT INTO `VIDEOS`(`DESCRIPCION`, `LINK`) VALUES ('".$video->getDescripcion()."', '".$video->getLink()."')";
        if($conexion -> Ejecutar($sql))
        {
            $estado = true;
        }
        $conexion->Cerrar();
        return $estado;
    }
}