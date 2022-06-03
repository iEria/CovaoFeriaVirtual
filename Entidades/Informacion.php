<?php
 
 class Informacion
 {
    private $id;
    private $descripcion;


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
    public function getdescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $id
     */
    public function setdescripcion($descripcion)
    {
        $this->id = $descripcion;
    }

 }

