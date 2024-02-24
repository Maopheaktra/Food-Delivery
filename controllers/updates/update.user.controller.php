<?php

require "../../database/database.php";
require "../../models/user.model.php";

$user_id = 1;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (
        isset($_POST['usernames']) && !empty($_POST['usernames']) &&
        isset($_POST['phone']) && !empty($_POST['phone'])
    ) {

        // Sanitize form input
        $usernames = htmlspecialchars($_POST['usernames']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST["phone"]);

        // echo $usernames, $email, $phone;
        echo updateUsers('1', $usernames, $phone, $email);
    }
}
header('Location: /profile');
