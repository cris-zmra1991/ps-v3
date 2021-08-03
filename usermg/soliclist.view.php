<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="../res/css/semantic.min.css">
  <link rel="stylesheet" href="../res/css/main.css">

  <body style="background-color: #fff;">
    <h3>Listado de usuarios:</h3>
    <table class="ui striped table">
      <thead>
        <tr>
          <th scope="col">Identificador</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Correo electrónico</th>
          <th scope="col">Fecha de solicitud</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $data = $database->select("new_user_request","*");

        foreach($data as $solicitudes){ ?>
          <tr>
            <td><?php echo $solicitudes["user"] ?></td>
            <td><?php echo $solicitudes["user_name"] ?></td>
            <td><?php echo $solicitudes["last_name"] ?></td>
            <td><?php echo $solicitudes["email"] ?></td>
            <td><?php echo $solicitudes["created"] ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php
    if (!isset($data["user"])) {
      echo "<h5>&nbsp;No hay solicitudes de usuario actualmente</h5>";
    }
     ?>
<script type="text/javascript" src="../res/js/jquery.min.js"></script>
<script type="text/javascript" src="../res/js/semantic.min.js"></script>

  </body>
</html>
