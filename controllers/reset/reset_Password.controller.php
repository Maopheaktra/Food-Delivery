<?php
require "database/database.php";
require "views/resetPassword/forget_Password.view.php";

// -----------------Code to send to email to reset new password--------------------
if (isset($_POST['send_email']) && $_POST['email']) {
    # code...
    $email = $_POST['email'];
    $users = mysql_query("SELECT email, password FROM users WHERE email ='$email'");

    if (mysql_num_rows($select)==1) {
        # code...
        while ($row = mysql_fetch_array($select)) {
            # code...
            $email = md5($row['email']);
            $password = md5($row['password']);
        }
        $link="<a href='www.samplewebsite.com/controllers/reset/new_Password.controller.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
        
    }

}