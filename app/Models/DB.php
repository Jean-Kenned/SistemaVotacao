<?php

class DB {
  private $connection;

  public function getConnection(){
    $this->connection = new mysqli(MYSQL_HOST, MYSQL_USER , MYSQL_PASS, MYSQL_DBNAME);
    if ($this->connection->connect_error) {
      die("Connection failed: " . $this->connection->connect_error);
    }

    return $this->connection;
  }

}


?>