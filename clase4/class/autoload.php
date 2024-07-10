
<?php
/* @autor Rodrigo González */

$classMap = [
  'Database' => __DIR__ . '/database.php',
  'Categoria' => __DIR__ . '/categoria.php',
  'Producto' => __DIR__ . '/producto.php'
];

spl_autoload_register(function ($class_name) use ($classMap) {
  if (isset($classMap[$class_name])) {
    require_once $classMap[$class_name];
  }
});



// CARGA AUTOMÁTICA, para que funcione, los archivos de php se deben llamar igual a la clase que contienen

// spl_autoload_register(function ($class_name) {
//   $file = __DIR__ . '/' . $class_name . '.php';
//   if (file_exists($file)) {
//     require_once $file;
//   }
// });