
<?php

// ----get data from user input------
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // TO DO-----------
    if (isset($_POST['usernames']) && !empty($_POST['usernames'] && !empty($_POST['gender'] && !empty($_POST['phone'])))){
        $usernames = $_POST['usernames'];
        echo "Your username is: " .$usernames;
        $role = $_POST['optradio'];
        echo "Your role is: ". $role;
        $gender = $_POST['gender'];
        echo "Your gender is: " .$gender; 
        $email = htmlspecialchars($_POST['email']);
        echo "Your email is: " .$email;
        $phone = $_POST["phone"];
        echo "Your phone number is: " .$phone; 
    }
}
