<?php session_start();
require '../res/php/app_top.php';

$database->update("users",["active" => "0"],["user" => $_SESSION['usuario']]);
session_destroy();
header('Location: '.RUTA.'index.php');

 ?>
