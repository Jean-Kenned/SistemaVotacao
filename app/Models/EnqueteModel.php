<?php

require 'DB.php';
require __DIR__.'/../Enquete.php';

class EnqueteModel {
  public static function selectAll() {
     $DB = new DB; 
     $connection = $DB->getConnection();
     $sql = "SELECT * FROM Enquetes";
     $result = $connection->query($sql);
     $enquetes = array();
     if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $enquete = new Enquete($row["titulo"],$row["dataInicio"],$row["dataTermino"],$row["id"]);
        array_push($enquetes,$enquete);
      }
    }  
    return $enquetes;
  }

  public static function save($titulo,$dataInicio,$dataTermino,$opcoes){
    $DB = new DB();
    $connection = $DB->getConnection();
    $sql = "INSERT INTO Enquetes (titulo, dataInicio, dataTermino) VALUES (?, ?, ?)";
    $sqlPreparedEnquete = $connection->prepare($sql);
    $sqlPreparedEnquete->bind_param("sss",  $titulo, $dataInicio, $dataTermino);

    if ($sqlPreparedEnquete->execute()){
        $id_insert = $sqlPreparedEnquete->insert_id;
        $sql = "INSERT INTO Opcoes (nome, numeroVotos, id_enquete) VALUES ";
        $values = "";
        foreach($opcoes as $opcao){
          $nome = $opcao->getNome();
          $numeroVotos = $opcao->getNumeroVotos();
          $values = $values."('$nome','$numeroVotos','$id_insert'),";
        }
        $sql = $sql.$values;
        $sql = substr($sql, 0, -1);
        $sql = $sql.";";
        if ($connection->query($sql) === TRUE) {
          return true;
        } 
        echo "Error: " . $sql . "<br>" . $connection->error;
        return false;
        
    }
      echo "Erro ao cadastrar!".$connection->error;
      return false;
  }

  public static function remove($id) {
      $DB = new DB;
      $connection = $DB->getConnection();
      $sql = "DELETE FROM Enquetes WHERE id = $id";
      if ($connection->query($sql) === TRUE) {
        return true;
      }
      echo "Erro ao deletar!".$connection->error;
      return false;
      
    }


    public static function update($titulo, $dataInicio, $dataTermino,$opcoes, $id){
        $DB = new DB;
        $connection = $DB->getConnection();
        $sql = "UPDATE Enquetes SET titulo = '$titulo' , dataInicio = '$dataInicio', dataTermino = '$dataTermino' WHERE id = $id";
        if ($connection->query($sql) === TRUE){
          $sql = "DELETE FROM Opcoes WHERE id_enquete = $id";
          if ($connection->query($sql) === TRUE) {
              $sql = "INSERT INTO Opcoes (nome, numeroVotos, id_enquete) VALUES ";
              $values = "";
              foreach($opcoes as $opcao){
                  $nome = $opcao->getNome();
                  $numeroVotos = $opcao->getNumeroVotos();
                  $values = $values."('$nome','$numeroVotos','$id'),";
              }
              $sql = $sql.$values;
              $sql = substr($sql, 0, -1);
              $sql = $sql.";";
              if ($connection->query($sql) === TRUE) {
                   return true;
              }
               echo "Error: " . $sql . "<br>" . $connection->error;
               return false;
              

          } 
          echo "Erro ao deletar!".$connection->error;
          return false;
        }
        echo "Erro ao atualizar";
        print_r($connection->error);
        return false;
        
    }
}

?>