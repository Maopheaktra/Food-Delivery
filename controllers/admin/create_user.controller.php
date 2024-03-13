<?php 
require "../../database/database.php";
require "../../models/admin.model.php";
require "../../models/employee.model.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] !== '' && $_POST['email'] !== '' && $_POST['password'] !== '' && $_POST['number'] !== '' && $_POST['role'] !== '') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phoneNumber = $_POST['number'];
        $role = $_POST['role'];
        $gender = $_POST['gender'];
        $userImg = 'IMG-65d9f4f69e5411.43011126.jpg';
        
        createUsers($username, $email, $password, $gender, $role, $phoneNumber, $userImg);

        header('location: /');
        exit(); 
    } else {
       
    }
    header('location: /');
}
