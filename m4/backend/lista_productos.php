<?php
include '../class/autoload.php';
$database = new Database("miproyecto2", "127.0.0.1", "root", "");
$datos = new Producto($database->getConnection());
$productos = $datos->getAll();

include 'views/lista_productos.php';

?>