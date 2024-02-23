<?php
// require "database/database.php";
// require "models/employee.model.php";
// $user = getUsers();
$_SESSION['user'] = '1';
require "views/profiles/profile.view.php";
session_unset();