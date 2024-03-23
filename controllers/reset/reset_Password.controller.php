<?php
require "database/database.php";
require "views/resetPassword/forget_Password.view.php";
require 'models/resetPassword.model.php';

// -----------------Code to send to email to reset new password--------------------
 if ($_SERVER['REQUEST_METHOD' == 'POST']) {
    # code...
    empty($_POST['email']) ? "" : $errorEmail = "Please Enter Your Email Address!";
    if (!isset($errorEmail)){
      checkEmail($_POST['email'])? "" : $errorEmail = "Your Email is not valid";
      if (checkEmail ($_POST['email'])) {
         # code... 
         $email = $_POST['email'];
         $pinCode = random_int(100000, 999999);
         setpinCodeByEmail($email, $pinCode);
         $_SESSION['email_reset'] = $email;
         require "controllers/reset/sendMail.controller.php";
         header("Location: /codesecurity");
      }
    }
 }