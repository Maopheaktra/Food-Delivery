<?php
function getAllUsers()
{
    global $connection;

    $query = "
        SELECT 
            u.user_id,
            u.username,
            u.email,
            u.gender,
            u.phoneNumber,
            u.password,
            u.user_img,
            r.role_type
        FROM 
            users u
        LEFT JOIN 
            roles r ON u.role_id = r.role_id
    ";

    $statement = $connection->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}


function createUsers($username, $email, $password, $gender, $role, $phoneNumber, $userImg)
{
    global $connection;
    $statement = $connection->prepare(" insert into users (username, email, password, gender, role_id, phoneNumber, user_img) values (:username, :email, :password, :gender, :role_id, :phoneNumber, :userImg)");
    $statement->execute([
        ':username' => $username,
        ':email' => $email,
        ':password' => $password,
        ':gender' => $gender,
        ':role_id' => $role,
        ':phoneNumber' => $phoneNumber,
        ':userImg' => $userImg,
    ]);
}




// Function to update user information in the database
function updateUsers($username)
{
    global $connection;
    $statement = $connection->prepare("
        UPDATE users
        SET 
            username = '$username',
        WHERE
            user_id = 30
    ");
    $statement->execute();
}

function destroy($user_id)
{
    global $connection;
    $statement = $connection->prepare("DELETE FROM users WHERE user_id = :user_id");
    $statement->execute([
        ':user_id' => $user_id,
    ]);

    header("Location: /");
    exit(); 
}

function updateUser($name, $phone, $email, $userID, $role): bool
{
    global $connection;
    $statement = $connection->prepare("update users set username = :username, phoneNumber = :phone, email = :email, role_id = :role where user_id = :userID");
    $statement->execute([
        ':username' => $name,
        ':phone' => $phone,
        ':email' => $email,
        ':userID' => $userID,
        ':role' => $role
    ]);
    return $statement->rowCount() > 0;
}

