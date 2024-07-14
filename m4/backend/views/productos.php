<?php
include '../../class/autoload.php';
$database = new Database("miproyecto2", "127.0.0.1", "root", "");
$datos = new Categoria($database->getConnection());
$categorias = $datos->getAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Productos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link href="../../assets/css/estilos.css" rel="stylesheet" />
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <main>
      <nav>
        <ul>
          <li>
            <a href="../../index.php">
              <img class="logo" src="../../assets/img/logo.svg" />
            </a>
          </li>
          <li><a href="../../index.php">Inicio</a></li>
          <li><a href="views/categorias.html">Categorias</a></li>
          <li>
            <a href="../lista_categorias.php">Lista Categorias</a>
          </li>
        </ul>
      </nav>

      <div class="form_container">
        <h1>Crear producto</h1>

        <form
          id="formulario_productos"
          class="formulario"
          action="../productos.php"
          method="post"
          enctype="multipart/form-data"
        >
          <div class="form_input">
            <label for="nombre">Nombre del producto</label>
            <input name="nombre" type="text" />
          </div>

          <div class="form_input">
            <label for="descripcion">Descripcion del producto</label>
            <input name="descripcion" type="text" />
          </div>

          <div class="form_input">
            <label for="precio">Precio del producto</label>
            <input name="precio" type="text" />
          </div>

          <div class="form_input">
            <label for="categoria_id">Categoría del producto</label>
            <select name="categoria_id">
              <option value="0">Selecciona una categoría</option>

              <?php foreach ($categorias as $categoria): ?>
                <option value="<?= $categoria["id"] ?>">
                  <?= $categoria["nombre"] ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form_input">
            <label for="imagen">Imagen del producto</label>
            <input name="imagen" type="file" />
          </div>

          <div class="form_footer">
            <input class="btn" type="reset" value="Cancelar" />
            <input class="btn" type="submit" value="Enviar" />
          </div>
        </form>
      </div>
    </main>

    <script src="../../assets/js/productos.js"></script>
  </body>
</html>
