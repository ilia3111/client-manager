<?php
$db = new SQLite3('clients.db');

$db->exec("CREATE TABLE IF NOT EXISTS clients (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT,
    phone TEXT,
    email TEXT
)");
?>
