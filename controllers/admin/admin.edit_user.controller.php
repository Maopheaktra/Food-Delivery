<?php
session_start();
require "../../database/database.php";
require "../../models/employee.model.php";

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // Check if all required fields are filled
//     if ($_POST['username'] !== '' && $_POST['email'] !== '' && $_POST['password'] !== '' && $_POST['number'] !== '' && $_POST['role'] !== '') {
//         // If all required fields are filled, proceed with user creation
//         $username = $_POST['username'];
//         $email = $_POST['email'];
//         $password = $_POST['password'];
//         $phoneNumber = $_POST['number'];
//         $role = $_POST['role'];
//         $gender = $_POST['gender'];
//         $userImg = 'IMG-65d9f4f69e5411.43011126.jpg';

        
//         exit(); 
//     } else {
//         echo "Please fill in all required fields.";
//     }
// }
$_SESSION['popup'] = showPf($_GET['id']);

header('location: /');
