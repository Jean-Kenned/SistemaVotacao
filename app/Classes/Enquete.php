<?php

class Enquete {
  private $titulo;
  private $dataInicio;
  private $dataTermino;
  private $id;


  function __construct($titulo,$dataInicio,$dataTermino,$id) {
    $this->titulo = $titulo;
    $this->dataInicio = $dataInicio;
    $this->dataTermino = $dataTermino;
    $this->id = $id;
  }

  public function getTitulo(){
     return $this->titulo;
  }

  public function getDatainicio(){
    return $this->dataInicio;
  }

  
  public function getDataTermino(){
    return $this->dataTermino;
 }


 public function getId(){
   return $this->id;
 }


}

?>