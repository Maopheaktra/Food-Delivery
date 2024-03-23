<?php
function getPasswordByUserId(int $userID): array{
    global $connection;
    $statement = $connection->prepare("SELECT password FROM users where user_id== :user_id");
    $statement-execute([
        ':user_id'=> $userID
    ]);
    return $statement->fetch(); 
}


function updatePwdByUserID(int $userID, string $newPassword):bool{
    global $connection;
    $statement = $connection->prepare("UPDATE users set password=:new_pass WHERE user_id = :user_id");
    $statement->execute([
        ':new_pass' =>$newPassword,
        ':user_id'=>$userID
    ]);
    return $statement-> rowCount() > 0;
}