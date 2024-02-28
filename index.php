<?php
// session_start();
// session_destroy();
require 'utils/url.php';
require 'database/database.php';
require 'controllers/signin/signin.acc.controller.php';
require 'controllers/signup/show.controller.php';

if (isset($_SESSION["email"])) {
    if ($_SESSION['role'] == 2) { 
        require "admin_router.php";
    } else{
        require 'router.php';
    }
}
if (urlIs("/admin")) { 
    require "admin_router.php";
} else if (urlIs('/signin') || urlIs('/signup') || urlIs('/resetPwd')) {
    require "authentication_router.php";
}else{
    require "authentication_router.php";
}



