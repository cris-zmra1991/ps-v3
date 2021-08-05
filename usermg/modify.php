<?php
require '../res/php/app_top.php';
if(!isset($_GET["name"])) exit();
$name = $_GET["name"];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../res/css/main.css">
    <link rel="stylesheet" href="../res/css/semantic.min.css">
    <link rel="stylesheet" href="../res/css/icon.min.css">
  </head>
  <body style="background-color: #fff;">
    <h3>Modificar usuario: "<?php echo $name; ?>"</h3>
    <br>
    <div class="divmedio">
    <form class="ui form" action="userupdt.php" method="post">
      <?php
      $data = $database->select("users","*",["user" => $name]);
      foreach($data as $usuario){
        $nombre = $usuario["user_name"];
        $apellidos = $usuario["last_name"];
        $correo = $usuario["email"];
      }
       ?>
      <input type="hidden" name="user" value="<?php echo $name; ?>">
      <div class="input">
          <label>Nombre de usuario</label>
          <input type="text" name="nombre" value="<?php echo $nombre; ?>">
        </div><br>
        <div class="input">
            <label>Apellidos</label>
            <input type="text" name="apellidos" value="<?php echo $apellidos; ?>">
          </div><br>
          <div class="input">
              <label>Correo electrónico</label>
              <input type="text" name="mail" value="<?php echo $correo; ?>">
            </div><br>
        <div class="input">
          <label>Contraseña</label>
          <input placeholder="Escriba su contraseña" type="password" name="password">
        </div><br>

      <button class="ui green tiny button fluid" type="submit">Actualizar</button>

    </form>
  </div>
  </body>
</html>
