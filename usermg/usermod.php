<?php
require '../res/php/app_top.php';
$usuario = $_SESSION['usuario'];
$usuarioid = $_SESSION['id_user'];
if (!empty($usuario)) {
  $data = $database->count("user_has_permissions",["AND" => ["id_user" => $usuarioid, "id_perm" => 3]]);
  if (!empty($data)) {
    require 'usermod.view.php';
  }
  else {
  require 'e125.php';
  }
}
?>
