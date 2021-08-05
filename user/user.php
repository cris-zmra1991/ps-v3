<?php
require '../res/php/app_top.php';
if (isset($_SESSION['usuario'])) {
  $usuario = $_SESSION['usuario'];
  $data = $database->count("users",["user" => $usuario]);
  if (!empty($data)) {
    $user = $database->select("users","*",["user" => $usuario]);
    require 'user.view.php';
    }
  else{
    header('Location: '.RUTA.'login/login.php');
  }
}
else {
  header('Location: '.RUTA.'login/login.php');
}
?>
