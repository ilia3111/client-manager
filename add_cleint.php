<?php
include 'db.php';

$name  = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$stmt = $db->prepare("INSERT INTO clients (name, phone, email) VALUES (?, ?, ?)");
$stmt->bindValue(1, $name);
$stmt->bindValue(2, $phone);
$stmt->bindValue(3, $email);
$stmt->execute();

header("Location: index.php");
exit;
