<?php
require "../../database/database.php";
// require "../../controllers/admin/admin.update.controller.php";

if (isset($_GET['user_id'])) {
    $query = "SELECT * FROM users WHERE user_id = :user_id";
    $statement = $connection->prepare($query);
    $statement->execute([
        ':user_id' => $_GET['user_id'],
    ]);
    $user = $statement->fetch();
    // header("location: /");
}