<?php 
include("includes/db-config.php");

$stmt = $pdo->prepare("SELECT * FROM `contact`;");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);

echo($json);

?>