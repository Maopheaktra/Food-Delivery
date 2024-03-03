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

// $users = getAllUsers();
// print_r($users);
function updateAllUsers($user_id, $username, $email, $password, $gender, $role_id, $phoneNumber, $user_img)
{
    global $connection;
    $statement = $connection->prepare("
        UPDATE users
        SET 
            username = :username,
            email = :email,
            password = :password,
            gender = :gender,
            role_id = :role_id,
            phoneNumber = :phoneNumber,
            user_img = :user_img
        WHERE
            user_id = :user_id
    ");
    $statement->execute([
        ':user_id' => $user_id,
        ':username' => $username,
        ':email' => $email,
        ':password' => $password,
        ':gender' => $gender,
        ':role_id' => $role_id,
        ':phoneNumber' => $phoneNumber,
        ':user_img' => $user_img
    ]);

    return $statement->rowCount() > 0;
}


