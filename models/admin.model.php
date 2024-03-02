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
            u.user_img,
            r.role_type
        FROM 
            users u
        LEFT JOIN 
            roles r ON u.role_id = r.role_id
    ";

<<<<<<< HEAD
    return $statement->rowCount() > 0;
}

function getPost(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from posts where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}

function displayUser() : array
{
    global $connection;
    $statement = $connection->prepare("select * from users");
=======
    $statement = $connection->prepare($query);
>>>>>>> b38715ff6b315d0f12b6076d092c73510ef2eabc
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}



<<<<<<< HEAD
    return $statement->rowCount() > 0;
}

function deletePost(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from posts where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}

=======
>>>>>>> b38715ff6b315d0f12b6076d092c73510ef2eabc
