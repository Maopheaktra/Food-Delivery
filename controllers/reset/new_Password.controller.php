<?php

session_start();
require "../../database/database.php";
require "../../models/employee.model.php";
if(isset($_POST['send_email'])){
   
    $isPwd = forgetPwd($_POST['send_email']);
    if ($isPwd == '1'){
        $_SESSION['pwd'] = '';
        echo forgetPwdValue($_POST['send_email'])[3];
        header('Location: /');
    }else{
        $_SESSION['pwd'] = 'Wrong Password!!';
        header("Location: /resetPwd");

    }
    
}

