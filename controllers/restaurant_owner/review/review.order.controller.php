<?php


if(isset($_POST)){
    $content = $_POST['message'];
    $userid = $_GET['userid'];
    $restauratid = $_POST['res_id'];
    $time = date("Y-m-d h:i:sa");

    echo $content, $userid, $restauratid, $time;
}

// header('location: /res_order');