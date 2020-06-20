<?php

class Opcao {
  private $nome;
  private $numeroVotos;

  function __construct($nome,$numeroVotos) {
    $this->nome = $nome;
    $this->numeroVotos = $numeroVotos;
  }


  public function getNome(){
     return $this->nome;
  }

  public function getNumeroVotos(){
    return $this->numeroVotos;
  }

}

?>