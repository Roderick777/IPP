<?php
    include 'class/autoload.php';

    $database = new Database("miproyecto2", "127.0.0.1", "root", "");
    $datos = new Producto($database->getConnection());
    $productos = $datos->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/estilos.css" />
  <link rel="stylesheet" href="assets/css/home.css" />
</head>
<body>
  <main>
    <nav>
        <ul>
            <li>
              <a href="./index.php"><img class="logo" src="assets/img/logo.svg" /></a>
            </li>
            <li><a href="./index.php">Inicio</a></li>
            <li><a href="./backend/views/categorias.html">Categorias</a></li>
            <li><a href="./backend/lista_categorias.php">Lista Categorias</a></li>
            <li><a href="./backend/views/productos.php">Productos</a></li>
            <li><a href="./backend/lista_categorias.php">Lista Categorias</a></li>
        </ul>
    </nav>
    <section class="container">
        <div id="productos" class="grid">
            <?php foreach ($productos as $producto): ?>
                <div class="card">
                    <img src="backend/<?= $producto["imagen"] ?>" alt="Imagen del Producto">
                    <h2><?= $producto["nombre"] ?></h2>
                    <p><?= $producto["descripcion"] ?></p>
                    <div class="category">Categoría: <?= $producto["nombre_categoria"] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
  </main>  
</body>
</html>