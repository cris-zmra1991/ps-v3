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
    <div class="login_container">
      <div class="ui tiny form">
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
            <option value="">State</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
          </select>
          </div>
          <p>Solicitar nueva cuenta de usuario <a href="#">aquí</a></p>
          <!-- BEGIN error box -->
          <?php echo $errores; ?>
          <!-- END error box -->
        <div class="ui green tiny button fluid">Acceder</div>
      </div>
    </div>
  </body>
</html>
