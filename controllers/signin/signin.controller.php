<?php

require "views/signin/signin.view.php";
require "models/user.model.php";

// function login($email, $password): void
// {
//     global $connection;
//     try {
//         $user_info = [
//             'email' => $email,
//             'pass' => $password
//         ];

//         $sanitizedData = sanitizeValues($user_info);

//         if ($sanitizedData !== null) {
//             $stmt = $connection->prepare('SELECT * FROM users WHERE email = :email,password = :password');
//             $stmt->bindParam(':email', $sanitizedData['email']);
//             $stmt->bindParam(':password', $sanitizedData['password']);
//             $stmt->execute();
//             $user_data = $stmt->fetch();

//             if ($user_data && password_verify($password, $user_data['password'])) {
//                 session_start();
//                 $_SESSION['user'] = $user_data;
//                 header('Location:/profile ');
//             }
//         }
//     } catch (Exception $e) {
//         error_log($e->getMessage());
//         echo "An unexpected error occurred.";
//     }
// }