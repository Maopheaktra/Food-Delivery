<?php


function getUsers() : array
{
    global $connection;
    $statement = $connection->prepare("select * from users");
    $statement->execute();
    return $statement->fetchAll();
}

function getRestaurants() : array
{
    global $connection;
    $statement = $connection->prepare("select * from restaurants");
    $statement->execute();
    return $statement->fetchAll();
}

function addUsers($username, $email, $password, $gender, $role, $phoneNumber){
    global $connection;
    echo $username.' '.$email.' '.$password.' '.$gender.' '.$phoneNumber.' '. $role;
    $statement = $connection->prepare(" insert into users (username, email, password, gender, role_id, phoneNumber) values (:username, :email, :password, :gender, :role_id, :phoneNumber)");
    $statement->execute([
        ':username'=>$username,
        ':email'=>$email,
        ':password'=>$password,
        ':gender'=>$gender,
        ':role_id'=>$role,
        ':phoneNumber'=>$phoneNumber,
    ]);
}

function accountExist($email): array {
    global $connection;
    $statement = $connection->prepare("select * from users where email = :email");
    $statement->execute([
        ':email'=> $email,
    ]);

    if($statement->rowCount() > 0){
        return $statement->fetch();
    }else{
        return [];
    }
    
}

function getCate(){
    global $connection;
    $statement = $connection->prepare("select * from categories");
    $statement->execute();
    return $statement->fetchAll();   
}

function getFoodbyCate($cateid){
    global $connection;
    $statement = $connection->prepare("select * from foods where category_id = :cateid");
    $statement->execute([':cateid'=> $cateid]);
    return $statement->fetchAll();
}



