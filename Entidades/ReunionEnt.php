<?php
 
 class ReunionEnt
 {
    private $idReunion;
    private $link;
    private $idEspecialidad;

     /**
      * @return mixed
      */
     public function getIdReunion()
     {
         return $this->idReunion;
     }

     /**
      * @param mixed $idReunion
      */
     public function setIdReunion($idReunion): void
     {
         $this->idReunion = $idReunion;
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

