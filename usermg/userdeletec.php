<?php
require '../res/php/app_top.php';
if(!isset($_GET["name"])) exit();
$name = $_GET["name"];
$data = $database->delete("users",["user" => $name]);
$resultado = $data->rowCount();
if($resultado == 1){
	header("Location: userdel.php");
	exit;
}
else echo "Algo salió mal";
?>
