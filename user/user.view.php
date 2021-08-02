<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../res/css/semantic.min.css">
    <link rel="stylesheet" href="../res/css/main.css">
    <link rel="stylesheet" href="../res/css/icon.min.css">

    </script>
  </head>
  <body>
    <div class="container_top_user">
    <div class="ui inverted menu">
      <div class="item">
      <img src="../res/img/logo.png" height="25" >
    </div>
    <a class="ui labeled icon item" href="first.php" target="iframe_user_content">
      <i class="home icon"></i>&nbsp;&nbsp;Inicio
    </a>
    <a class="ui labeled icon item" href="../usermg/usermg.php" target="iframe_user_content">
      <i class="users icon"></i>&nbsp;&nbsp;Gestión de usuarios
    </a>
    <a class="ui labeled icon item">
      <i class="boxes icon"></i>&nbsp;&nbsp;Inventarios
    </a>
    <a class="ui labeled icon item">
      <i class="edit icon"></i>&nbsp;&nbsp;Área técnica
    </a>
    <a class="ui labeled icon item">
      <i class="cogs icon"></i>&nbsp;&nbsp;Producción
    </a>
    <a class="ui labeled icon item">
      <i class="clipboard check icon"></i>&nbsp;&nbsp;Calidad
    </a>

    <div class="right menu">
      <div class="ui simple dropdown item">
        User
        <div class="menu">
        <a class="item">Electronics</a>
        <a class="item">Automotive</a>
        <a class="item">Home</a>
        </div>
      </div>
      <a class="ui item" href="../conf/close.php">
        <i class="sign-out icon"></i>
      </a>

  </div>

  </div>
</div>
    <iframe class="iframe_user_content" src="first.php" name="iframe_user_content" id="iframe_user_content"></iframe>
    <script type="text/javascript" src="../res/js/jquery.min.js"></script>
  </body>
  </html>
