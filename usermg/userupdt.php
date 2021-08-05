<?php
require '../res/php/app_top.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user = $_POST['user'];
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $correo = $_POST['mail'];
  $password = $_POST['password'];
  $password = hash('sha512', $password);
  if (!empty($_POST['password'])) {
    $database->update("users",["user_name" => $nombre, "last_name" => $apellidos, "email" => $correo, "password" => $password],["user" => $user]);
    $database->insert("logs",["type" => "userupdtpass", "affected" => $user]);
    header("Location: usermod.php");
  }
  else {
    $database->update("users",["user_name" => $nombre, "last_name" => $apellidos, "email" => $correo],["user" => $user]);
    $database->insert("logs",["type" => "userupdt", "affected" => $user]);
    header("Location: usermod.php");
  }
}
?>
