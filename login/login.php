<?php
require '../res/php/login_top.php';
$errores = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);
    $company = $_POST['company'];
    $data = $database->select("users","*",
    [
	     "user_id[>]" => 100
    ]);
}
require 'login.view.php';
?>
