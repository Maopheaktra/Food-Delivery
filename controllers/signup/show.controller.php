
<?php

require "../../database/database.php";
require "../../models/employee.model.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['usernames']) && !empty($_POST['usernames'] && !empty($_POST['gender'] && !empty($_POST['phone'])
    ))){
        $usernames = htmlspecialchars($_POST['usernames']);
        $role = htmlspecialchars($_POST['optradio']);
        $gender = htmlspecialchars($_POST['gender']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $phone = htmlspecialchars($_POST["phone"]);

        $data = accountExist($email);
        if(count($data) == 0){
            $signup = addUsers($usernames, $email, $password, $gender, $role, $phone);
            header('Location: /signin');
        }else{
            header('Location: /signup');
        }

    }
}

// $data = getUsers();
// print_r($data);



