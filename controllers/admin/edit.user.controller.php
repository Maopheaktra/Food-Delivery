<?php

session_start();
require "../../database/database.php";
require "../../models/admin.model.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if all required fields are filled
    if ($_POST['username'] !== '' && $_POST['email'] !== '' && $_POST['password'] !== '' && $_POST['number'] !== '' && $_POST['role'] !== '') {
        // If all required fields are filled, proceed with user creation
        $username = strval($_POST['username']);
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phoneNumber = $_POST['number'];
        $role = $_POST['role'];
        $gender = $_POST['gender'];
        $user_id = intval($_POST['user_id']);

        updateUser($username, $phoneNumber, $email, $user_id, $role);

        header('Location: /');

        exit(); 
    } else {
        echo "Please fill in all required fields.";
    }
}