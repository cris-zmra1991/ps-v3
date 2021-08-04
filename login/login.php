<?php
require '../res/php/app_top.php';
$errores = '';
$comp = $database->select("config",["id_conf","company_name"]);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);
    $company = $_POST['company'];
    $data = $database->select("users","*",["user" => $usuario]);
      foreach ($data as $sesion)
      {
      $_SESSION['id_user'] = $sesion["user_id"];
      $_SESSION['usuario'] = $sesion["user"];
      $itempass = $sesion["password"];
      }
      $_SESSION['company'] = $company;
    if ($password == $itempass) {
      $database->update("users",["active" => "1"],["user" => $usuario]);
      header('Location: '.RUTA.'index.php');
    }
    else {
      $errores = '<p>Error, revise los datos introducidos</p>';
    }
  }
require 'login.view.php';
?>
