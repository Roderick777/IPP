<?php
class Database{
  private $bd;

  function __construct($driver, $base_datos, $host, $user, $pass) {
    $conection = $driver.":dbname=".$base_datos.";host=$host";
    $this->bd = new PDO($conection, $user, $pass);
    if (!$this->bd) throw new Exception("No se ha podido realizar la conexión");
  }    

  function select($tabla, $filtros = null, $arr_prepare = null, $orden = null, $limit = null){
    $sql = "SELECT * FROM ".$tabla;
    if ($filtros != null) $sql .= " WHERE ".$filtros;
    if ($orden != null) $sql .= " ORDER BY ".$orden;
    if ($limit != null) $sql .= " LIMIT ".$limit;
    $resourse = $this->bd->prepare($sql);
    $resourse->execute($arr_prepare);
    if ($resourse) return $resourse->fetchAll(PDO::FETCH_ASSOC);
    else throw new Exception ("No se pudo realizar la consulta de selección");
  }

  function delete($tabla, $filtros = null, $arr_prepare = null){
    $sql = "DELETE FROM ".$tabla;
    if ($filtros != null) $sql .= " WHERE ".$filtros;
    $resourse = $this->bd->prepare($sql);
    $resourse->execute($arr_prepare);
    if ($resourse) return $resourse->rowCount(); // Devuelve el número de filas afectadas
    else throw new Exception ("No se pudo realizar la consulta de eliminación");
  }

  function insert($tabla, $campos, $valores, $arr_prepare = null){
    $sql = "INSERT INTO ".$tabla." (".$campos.") VALUES (".$valores.")";
    $resourse = $this->bd->prepare($sql);
    $resourse->execute($arr_prepare);
    if ($resourse) return $this->bd->lastInsertId(); // Devuelve el ID de la última fila insertada
    else throw new Exception ("No se pudo realizar la inserción");
  }

  function update($tabla, $campos, $valores, $filtros, $arr_prepare = null){
    $sql = "UPDATE ".$tabla." SET ";
    $sets = [];
    foreach ($campos as $campo) {
      $sets[] = $campo . " = ?";
    }
    $sql .= implode(", ", $sets);
    $sql .= " WHERE ".$filtros;
    $resourse = $this->bd->prepare($sql);
    $resourse->execute($valores);
    if ($resourse) return $resourse->rowCount(); // Devuelve el número de filas afectadas
    else throw new Exception ("No se pudo realizar la actualización");
  }
}
?>