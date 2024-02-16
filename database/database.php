<?php

$hostname = "localhost";
$database = "panda_db";
$username = "root";
$password = "";

$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";
$connection = new PDO($dsn, $username, $password);

// test the result--------
$statement = $connection->prepare("select * from users");
$statement->execute();
$value = $statement->fetch();
print_r ($value[2]);

echo "I connected the database";

