<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../res/css/semantic.min.css">
    <link rel="stylesheet" href="../res/css/main.css">
  </head>
  <body>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div class="login_container1">
      <form class="ui tiny form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <p class="login_h2">Acceso al sistema</p>
        <div class="input">
            <label>Nombre de usuario</label>
            <input placeholder="Escriba su nombre de usuario" type="text" name="user">
          </div>
          <div class="input">
            <label>Contraseña</label>
            <input placeholder="Escriba su contraseña" type="password" name="password">
          </div>
          <div class="input">
          <label>Compañía</label>
          <select class="ui fluid dropdown" name="company">
            <?php
              foreach ($comp as $valores):
              echo '<option value="'.$valores["id_conf"].'">'.$valores["company_name"].'</option>';
              endforeach; ?>
          </select>
          </div>
          <p>Solicitar nueva cuenta de usuario <a href="#">aquí</a></p>

        <button class="ui green tiny button fluid" type="submit">Acceder</button>
        <!-- BEGIN error box -->
        <?php echo $errores; ?>
        <!-- END error box -->
      </form>
    </div>
  </body>
</html>
