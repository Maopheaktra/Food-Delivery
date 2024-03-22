<?php 
session_start();
require "../../database/database.php";
require "../../models/employee.model.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] !== '' && $_POST['email'] !== '' && $_POST['password'] !== '' && $_POST['number'] !== '' && $_POST['role'] !== '') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $crypted = password_hash($password, PASSWORD_BCRYPT);
        $phoneNumber = $_POST['number'];
        $role = $_POST['role'];
        $gender = $_POST['gender'];
        $userImg = 'IMG-65d9f4f69e5411.43011126.jpg';
        // echo $role
        addUsers($username, $email, $crypted, $gender, $role, $phoneNumber, $userImg);
        if($role == 1){
            $_SESSION['alert'] = 'customer';
            header('location: /customer');
        }elseif ($role == 2) {
            $_SESSION['alert'] = 'res_owner';
            header('location: /res_owner');
        }elseif($role == 3){
            $_SESSION['alert'] = 'delivery';
            header('location: /delivery');
        }else{
            header('location: /');
        }
        
    }
}
?>