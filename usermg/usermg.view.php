<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="../res/css/semantic.min.css">
  <link rel="stylesheet" href="../res/css/main.css">

  <body>

  <div class="container_top_newuser">
    <div class="div_subpage ui grid">
    <div class="two wide column">
      <div class="ui fluid vertical menu">
  <div class="item">
    <div class="header">Usuarios</div>
    <div class="menu">
      <a class="item" href="userlist.php" target="iframe_usermg_content">Listado de usuarios</a>
      <a class="item" href="soliclist.php" target="iframe_usermg_content">Listado de solicitudes</a>
    </div>
  </div>
  <div class="item">
    <div class="header">Actualización</div>
    <div class="menu">
      <a class="item">Modificar usuarios</a>
      <a class="item">Eliminar usuarios</a>
    </div>
  </div>
  <div class="item">
    <div class="header">Solicitudes</div>
    <div class="menu">
      <a class="item">Listar solicitudes</a>
      <a class="item">Procesar solicitudes</a>
    </div>
  </div>
  <div class="item">
    <div class="header">Support</div>
    <div class="menu">
      <a class="item">E-mail Support</a>
      <a class="item">Preguntas Frequentes</a>
    </div>
  </div>
</div>
    </div>
    <div class="fourteen wide column">
      <div class="div_subpage ui segment">

      <iframe class="iframe_subpage" src="" name="iframe_usermg_content" id="iframe_usermg_content"></iframe>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="../res/js/jquery.min.js"></script>
<script type="text/javascript" src="../res/js/semantic.min.js"></script>

<script type="text/javascript">
$('.tabular.menu .item').tab();
</script>
  </body>
</html>
