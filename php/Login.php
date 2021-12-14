<?php 
require_once("config.php");
$username = $_POST["username"];
$password = $_POST["password"];
$user = new Users();
$user->Login($username, $password);

?>