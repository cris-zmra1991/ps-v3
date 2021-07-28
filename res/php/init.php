<?php
session_start();
require 'medoo.php';
use Medoo\Medoo;
try {
  $database = new Medoo([
  	// [required]
  	'type' => 'mysql',
  	'host' => 'localhost',
  	'database' => 'cp',
  	'username' => 'root',
  	'password' => '',
   ]);
} catch (PDOException $e) {
  echo "No se pudo conectar a la Base de Datos";
}
?>
