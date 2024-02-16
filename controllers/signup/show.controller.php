
<?php

// ----get data from user input------
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // TO DO-----------
    if (isset($_POST['usernames']) && !empty($_POST['usernames'] && !empty($_POST['gender']))){
        $usernames = $_POST['usernames'];
        $gender = $_POST['gender'];
        echo "Your gender is: " .$gender; 
        echo "Your username is: " .$usernames;
    }else {
        echo "Please enter your username!";
    }
}
