<?php

class VideosEnt
{
    private $idVideo;
    private $link;
    private $idEspecialidad;

    /**
     * @return mixed
     */
    public function getIdVideo()
    {
        return $this->idVideo;
    }

    /**
     * @param mixed $idVideo
     */
    public function setIdVideo($idVideo): void
    {
        $this->idVideo = $idVideo;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link): void
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getIdEspecialidad()
    {
        return $this->idEspecialidad;
    }

    /**
     * @param mixed $idEspecialidad
     */
    public function setIdEspecialidad($idEspecialidad): void
    {
        $this->idEspecialidad = $idEspecialidad;
    }
}