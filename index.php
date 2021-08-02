<?php
require 'res/php/app_top.php';
// comprobar session
if (isset($_SESSION['usuario'])) {
  // validar los datos por privilegio
  $data = $database->count("users",["user" => $_SESSION['usuario']]);

  if ($data == '1') {
    header('Location: '.RUTA.'user/user.php');
    }
    else {
    header('Location: '.RUTA.'login/login.php');
    }
}else {
header('Location: '.RUTA.'login/login.php');
}
 ?>
