<?php
require '../res/php/app_top.php';
if (isset($_SESSION['usuario'])) {
  $usuario = $_SESSION['usuario'];
  if (!empty($usuario)) {
    $data = $database->select("users","*",["user" => $usuario]);
    }
  else{
    echo "No esta autenticado";
  }

require 'user.view.php';
}

?>
