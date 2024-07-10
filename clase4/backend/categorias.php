<?php
include '../class/autoload.php';
$database = new Database("miproyecto2", "127.0.0.1", "root", "");

$nombre = $_POST['nombre'];

$categoria1 = new Categoria($database->getConnection());
$categoria1->setNombre($nombre);
$categoria1->insert();

header('Location: lista_categorias.php');
exit;

?>