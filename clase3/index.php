<?php
  require_once("database/database.php");
  $db = new Database("mysql", "escuela", "127.0.0.1", "root", "");
  $alumnos = $db->select("alumnos", null);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Title</title>
</head>
<body>
  <table>
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Email</th>
    </tr>
    <?php
      foreach ($alumnos as $alumno) {
        ?>
        <tr>
          <td><?= $alumno["nombre"] ?></td>
          <td><?= $alumno["apellido"] ?></td>
          <td><?= $alumno["email"] ?></td>
        </tr>
        <?php
      }
    ?>
  </table>
</body>
</html>