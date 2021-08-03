<?php
require '../res/php/app_top.php';
$errores = '';
$comp = $database->select("config",["id_conf","company_name"]);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);
    $company = $_POST['company'];
    $data = $database->select("users",["password"],["user" => $usuario]);
    $itempass = $data[0]["password"];
    if ($password == $itempass) {
      $_SESSION['usuario'] = $usuario;
      $_SESSION['company'] = $company;
      $database->update("users",["active" => "1"],["user" => $usuario]);
      header('Location: '.RUTA.'user/user.php');
    }
    else {
      $errores = '<p>Error, revise los datos introducidos</p>';
    }
  }
require 'login.view.php';
?>
