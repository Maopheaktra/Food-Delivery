
<?php
require "views/signup/signup.view.php";

// ----get data from user input------   
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // TO DO-----------
    if (isset($_POST['phone']) && !empty($_POST['phone'])){
        $phone = $_POST['phone'];
        echo "Your number phone is: " .$phone;
    }else {
        echo "Please enter your number phone!";
        }
}