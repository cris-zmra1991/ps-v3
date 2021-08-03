<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="../res/css/semantic.min.css">
  <link rel="stylesheet" href="../res/css/main.css">
  <link rel="stylesheet" href="../res/css/icon.min.css">

  <body style="background-color: #fff;">
    <h3>Listado de usuarios:</h3>
    <table class="ui striped table">
      <thead>
        <tr>
          <th scope="col">Identificador</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Correo electrónico</th>
          <th scope="col">Modificar</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $data = $database->select("users","*");

        foreach($data as $solicitudes){ ?>
          <tr>
            <td><?php echo $solicitudes["user"] ?></td>
            <td><?php echo $solicitudes["user_name"] ?></td>
            <td><?php echo $solicitudes["last_name"] ?></td>
            <td><?php echo $solicitudes["email"] ?></td>
            <td><a class="ui orange button" href="<?php echo "user_delete.php?name=" . $solicitudes["user"]?>"><i class="edit icon"></i></a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
<script type="text/javascript" src="../res/js/jquery.min.js"></script>
<script type="text/javascript" src="../res/js/semantic.min.js"></script>

  </body>
</html>
