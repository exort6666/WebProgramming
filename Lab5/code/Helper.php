<?php
require_once 'db_connect.php';

$mysqli = db_connect();

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];


$stmt = $mysqli->prepare("INSERT INTO ad (email, category, title, description) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $email, $category, $title, $description);
$stmt->execute();

$stmt->close();
$mysqli->close();


header("Location: index.php");
exit;
?>
