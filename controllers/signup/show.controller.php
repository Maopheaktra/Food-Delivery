
<?php

// ----get data from user input------
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // TO DO-----------
    if (isset($_POST['usernames']) && !empty($_POST['usernames'])){
        $usernames = $_POST['usernames'];
        echo "Your username is: " .$usernames;
        $email = htmlspecialchars($_POST['email']);
        echo "Your email is: " .$email;

    }else {
        echo "Please enter your username!";
    }
}
