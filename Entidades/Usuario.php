<?php

class Usuario
{
    private $id;
    private $nombre;
    private $contrasena;


          /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


          /**
     * @return mixed
     */
    public function getnombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $id
     */
    public function setnombre($nombre)
    {
        $this->nombre = $nombre;
    }

         /**
     * @return mixed
     */
    public function getcontrasena()
    {
        return $this->contrasena;
    }

    /**
     * @param mixed $id
     */
    public function setncontrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }
}