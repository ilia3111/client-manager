<?php
include 'db.php';

$id = (int)$_GET['id'];
$db->exec("DELETE FROM clients WHERE id = $id");

header("Location: index.php");
exit;
