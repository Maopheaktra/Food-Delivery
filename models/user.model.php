<?php
function updateUsers($user_id, $username, $phone, $email)
{
    global $connection;
    $statement = $connection->prepare("UPDATE users SET username = :username, phoneNumber = :phoneNumber, email = :email WHERE user_id = :user_id");
    $statement->execute([
        ':username' => $username,
        ':phoneNumber' => $phone,
        ':email'=>$email,
        ':user_id' => $user_id
    ]);

    // echo $user_id, $username, $phone, $email;
}


function getUserById($user_id) {
    global $connection;

    $statement = $connection->prepare("SELECT * FROM users WHERE user_id = :user_id");
    $statement->execute([':user_id' => $user_id]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    return $user;
}


function delete($user_id)
{
    global $connection;
    $statement = $connection->prepare("DELETE FROM users WHERE user_id = :user_id");
    $statement->execute([
        ':user_id' => $user_id
    ]);
}




