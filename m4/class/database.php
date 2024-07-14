<?php
/* @autor Rodrigo González */

class Database{
  private $connection;

  function __construct($base_datos, $host, $user, $pass) {
    $conection = "mysql:dbname=".$base_datos.";host=$host";
    $this->connection = new PDO($conection, $user, $pass);
    if (!$this->connection) throw new Exception("No se ha podido realizar la conexión");
  }
  
  public function getConnection(){
    return $this->connection;
  }
}
?>