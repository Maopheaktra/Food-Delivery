
<?php

// ----get data from user input------
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // TO DO-----------
    if (isset($_POST['usernames']) && !empty($_POST['usernames'])){
        $usernames = $_POST['usernames'];
        echo "Your username is: " .$usernames;
    }else {
        echo "Please enter your username!";
    }
}
echo 'shfkshf';