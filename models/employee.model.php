<?php

function getUsers() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users");
    $statement->execute();
    return $statement->fetchAll();
}
function getUserByID($id): array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE user_id = :user_id");
    $statement->execute([":user_id" => $id]);
    $user = $statement->fetch();
    if ($user === false) {
        return []; 
    }
    return $user;
}


function getUserByName($username) {
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE username = :username");
    $statement->execute([':username' => $username]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user ? $user : null;
}

function getRestaurants() : array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM restaurants");
    $statement->execute();
    return $statement->fetchAll();
}

function addUsers($username, $email, $password, $gender, $role, $phoneNumber){
    global $connection;
    echo $username.' '.$email.' '.$password.' '.$gender.' '.$phoneNumber.' '. $role;
    $statement = $connection->prepare("INSERT INTO users (username, email, password, gender, role_id, phoneNumber) VALUES (:username, :email, :password, :gender, :role_id, :phoneNumber)");
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
    $statement = $connection->prepare("SELECT * FROM users WHERE email = :email");
    $statement->execute([
        ':email'=> $email,
    ]);

    if($statement->rowCount() > 0){
        return $statement->fetch();
    }else{
        return [];
    }
    
};


function getUserByEmail($email)
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE email = :email");
    $statement->execute([':email' => $email]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user ? $user : null;
}