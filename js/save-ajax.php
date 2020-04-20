<?php
//saveGame.php

//receive user variables
$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];
//var_dump($_POST);

//save user data into the database
include("includes/db-config.php");

$stmt = $pdo->prepare("INSERT INTO `contact` 
	(`id`, `email`, `name`, `message`) 
	VALUES (NULL, '$email', '$name', '$message');");

$stmt->execute();

echo('{"success":"true"}');

?>