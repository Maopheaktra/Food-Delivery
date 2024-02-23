<?php

function createUser($name, $email, $password, $phoneNumber, $gender, $role) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into users (username, email, password, gender, role_id, phoneNumber) values (:username, :email, :password, :gender, :role_id, :phoneNumber)");
    $statement->execute([
        ':username' => $name,
        ':email' => $email,
        ':password' => $password,
        ':gender' => $gender,
        ':role_id' => $role,
        ':phoneNumber' => $phoneNumber,

    ]);

    return $statement->rowCount() > 0;
}

