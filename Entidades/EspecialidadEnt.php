<?php
 
 class EspecialidadEnt
 {
    private $idEspecialidad;
    private $nombre;

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

     /**
      * @return mixed
      */
     public function getNombre()
     {
         return $this->nombre;
     }

     /**
      * @param mixed $nombre
      */
     public function setNombre($nombre): void
     {
         $this->nombre = $nombre;
     }

 }
