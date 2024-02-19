<?php


function getUsers() : array
{
    global $connection;
    $statement = $connection->prepare("select * from users");
    $statement->execute();
    return $statement->fetchAll();
}

// restaurant-----------
function getRestaurants() : array
{
    global $connection;
    $statement = $connection->prepare("select * from restaurants");
    $statement->execute();
    return $statement->fetchAll();
}
function detailRes($id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from restaurants where restaurant_id = $id");
    $statement->execute();
    return $statement->fetch();
}

// ========

function getResByID($id)
{
    global $connection;
    $statement = $connection->prepare("select * from restaurants where restaurant_id = $id ");
    $statement->execute();
    return $statement->fetch();
}

function getFoods($cid): array {
    global $connection;
    $statement = $connection->prepare("select * from foods where category_id = $cid");
    $statement->execute();
    return $statement->fetchAll();
}

function getCate($id):array {
    global $connection;
    $statement = $connection->prepare("select categories.category_id, categories.name from ((res_categories inner join categories on categories.category_id = res_categories.category_id) inner join restaurants on res_categories.restaurant_id = restaurants.restaurant_id) where restaurants.restaurant_id = $id");
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

// add food------------

function showFood($id){
    global $connection;
    $statement = $connection->prepare("select * from foods where Food_id = $id");
    $statement->execute();
    return $statement->fetch();
}



function addTolist(){
    global $connection;
    $statement = $connection->prepare("select * from addFood");
    $statement->execute();
    return $statement->fetchAll();
}


function addFood($id, $name, $price) {
    global $connection;
    $statement = $connection->prepare(" insert into addFood (add_id, name, price) values (:add_id, :name, :price)");
    $statement->execute([
        ':add_id'=>$id,
        ':name'=>$name,
        ':price'=>$price
    ]);
}

function deleteFromList(){
    global $connection;
    $statement = $connection->prepare("delete from addFood");
    $statement->execute();
}


