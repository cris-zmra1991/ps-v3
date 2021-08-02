<?php
require 'init.php';
/** Session verify */
function iniciarSession($table, $database)
{
  $data = $database->count("users",["user" => $_SESSION['usuario']]);
  return $data;
}
/** Clases para tratamiento de usuarios */
class User_Actions
{

}

 ?>
