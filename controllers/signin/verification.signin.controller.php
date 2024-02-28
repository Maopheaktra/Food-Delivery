<?php

// session_start();
require '../../database/database.php';
require '../../models/employee.model.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $email = $_POST["email"];
   $password = $_POST["password"];

   $user = getUserByEmail($email);
   if ($user && password_verify($password, $user['password'])) {
      $_SESSION['user_id'] = $user['user_id']; 
      header("Location: /"); 
      exit();
   } else {
      echo "User Information: "."<br>";
      print_r($user);
      
      echo "Email: " . $email . "<br>";
      echo "Password: " . $password . "<br>";
      
      // echo "Current Directory: " . getcwd() . "<br>";
      
   
      // echo "Files in views directory: <br>";
      // $viewsDirectory = '../../views/';
      // $files = scandir($viewsDirectory);
      // print_r($files);
   }
}


