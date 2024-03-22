<?php

$token = $_GET['token'];
$token_hash = hash("sha256", $token);
$mysqli = require __DIR__ . "database/database.php";
$sql = "SELECT * FROM users WHERE reset_token_hash = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_params("s", $token_hash);
