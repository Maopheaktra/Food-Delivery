
<?php

require "../../database/database.php";
require "../../models/employee.model.php";

// ----get data from user input------
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // TO DO-----------
    if (isset($_POST['usernames']) && !empty($_POST['usernames'] && !empty($_POST['gender'] && !empty($_POST['phone'])))){
        $usernames = htmlspecialchars($_POST['usernames']);
        $role = htmlspecialchars($_POST['optradio']);
        $gender = htmlspecialchars($_POST['gender']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $phone = htmlspecialchars($_POST["phone"]);

        $data = accountExist($email);
        if(count($data) == 0){
            $singup = addUsers($usernames, $email, $password, $gender, $role, $phone);
            header('Location: /');
        }else{
            header('Location: /signup');
        }

    }
}

// addUsers();
// $data = getUsers();
// print_r($data);



