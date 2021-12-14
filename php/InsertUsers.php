<?php
require_once("config.php");

$username = $_POST["newusername"];
$birthdate = $_POST["newbirthdate"];
$firstname = $_POST["newfirstname"];
$password = $_POST["newpassword"];
$user = new Users();
$user->InsertUsers($username, $birthdate, $firstname, $password);
echo "usuário criado com sucesso";

?>