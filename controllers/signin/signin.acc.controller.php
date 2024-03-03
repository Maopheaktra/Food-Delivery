<?php

session_start();

if (isset($_POST['email']) && isset($_POST['pwd'])){
    require "../../database/database.php";
    require "../../models/user_info.model.php";
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    // $_SESSION['wrongPassword'] = '* your password is wrong';
    $user = login($email);
    if(password_verify($password, $user['password'])){
         // Set session variables
         $_SESSION["email"] = $user['email'];
         $_SESSION["password"] = $password;
         $_SESSION['userid'] = $user['user_id'];
         $_SESSION['role'] = $user['role_id'];
         $_SESSION['wrongPassword'] = '';
         
         // Redirect to the dashboard
         header("Location: /");
     }
     else{
        $_SESSION['wrongPassword'] = '* your password is wrong';
         header("Location: /");
     }
}