<?php
require '../res/php/app_top.php';
if (isset($_SESSION['usuario'])) {
  $usuario = $_SESSION['usuario'];
  if (!empty($usuario)) {
    $data = $database->select("users","*",["user" => $usuario]);
    }
  else{
    echo "Error";
  }

require 'user.view.php';
}
else {
  header('Location: '.RUTA.'login/login.php');
}

?>
