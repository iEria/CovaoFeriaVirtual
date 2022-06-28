<?php

class InformacionEnt
{
    private $idInformacion;
    private $descripcion;
    private $idEspecialidad;

    /**
     * @return mixed
     */
    public function getIdInformacion()
    {
        return $this->idInformacion;
    }

    /**
     * @param mixed $idInformacion
     */
    public function setIdInformacion($idInformacion): void
    {
        $this->idInformacion = $idInformacion;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
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