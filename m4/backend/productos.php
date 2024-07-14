<?php
include '../class/autoload.php';
$database = new Database("miproyecto2", "localhost", "root", "");

$imagen = $_FILES['imagen'];
// Cargar el archivo
$uploader = new FileUploader();
$rutaImage = $uploader->upload($imagen);
$producto = new Producto($database->getConnection());
$producto->setNombre($_POST['nombre']);
$producto->setDescripcion($_POST['descripcion']);
$producto->setPrecio($_POST['precio']);
$producto->setCategoriaId($_POST['categoria_id']);
$producto->setImagen($rutaImage);

$producto->insert();

header('Location: lista_productos.php');
exit;

?>