<?php
// session_start();
// session_destroy();
require 'utils/url.php';
require 'database/database.php';
require 'controllers/signin/signin.acc.controller.php';
require 'controllers/signup/show.controller.php';

if (isset($_SESSION["email"])) {
    if ($_SESSION['role'] == 2) { 
        require "restaurantOwner_router.php";
    }
    elseif (($_SESSION['role'] == 3) ||urlIs('/create-user')) { 
        require "admin_router.php";
    } else{
        require 'router.php';
    }
}
// }
else{
    require "authentication_router.php";
}