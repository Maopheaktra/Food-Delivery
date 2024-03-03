<?php
require "../../database/database.php";

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$phoneNumber = $_POST['number'];
$email = $_POST['email'];
$role = $_POST['role'];
$gender = $_POST['gender'];

$query = "UPDATE users SET username = :username, number = :number, email = :email, role = :role, gender = :gender WHERE user_id = :id;";
$statement = $connection->prepare($query);
$statement->execute([
    ':user_id' => $user_id,
    ':username' => $username,
    ':number' => $phoneNumber,
    ':email' => $email,
    ':role' => $role,
    ':gender' => $gender
]);

header('location: /');
?>
