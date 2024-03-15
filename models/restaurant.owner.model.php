<?php

function createRes($resname, $address, $resDes, $userid, $timeopen, $timeclose)
{
    global $connection;
    $statement = $connection->prepare("insert into restaurants(restaurant_name, address, time_open, description, user_id, time_close) values (:resname, :address, :timeopen, :resDes, :userid, :timeclose)");
    $statement->execute([
        ':resname' => $resname,
        ':address' => $address,
        ':timeopen' => $timeopen,
        ':resDes' => $resDes,
        ':userid' => $userid,
        ':timeclose' => $timeclose,
    ]);
}

function getRestaurant($userid)
{
    global $connection;
    $statement = $connection->prepare("select * from restaurants where user_id = :userid");
    $statement->execute([':userid' => $userid]);
    return $statement->fetch();
}

function getFoodOrder($resid, $action)
{
    global $connection;
    $statement = $connection->prepare("select * from orderdetails where restaurant_id = :resid && action = :action group by time");
    $statement->execute([
        ':resid' => $resid,
        ':action' => $action
    ]);
    return $statement->fetchAll();
}

function orderbyTimeInres($resid, $time, $actoin)
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM orderdetails WHERE restaurant_id = :resid && action = :action && time = :time");
    $stmt->execute([
        ':resid' => $resid,
        ':time' => $time,
        ':action' => $actoin
    ]);
    return $stmt->fetchAll();
}


function orderResponse($resid, $time, $action)
{
    global $connection;
    $statement = $connection->prepare("update orderdetails set action = :action where restaurant_id = :res_id && time = :time");
    $statement->execute([
        ":res_id" => $resid,
        ":time" => $time,
        ":action" => $action,
    ]);
}





// Function to get the restaurant ID based on the user ID
function getRestaurantIdByUserId($user_id)
{
    global $connection;
    $stmt = $connection->prepare("
        SELECT restaurant_id
        FROM restaurants
        WHERE user_id = :user_id
    ");
    $stmt->execute([':user_id' => $user_id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['restaurant_id'];
}

// Function to get the category IDs associated with the restaurant
function getCategory($restaurant_id)
{
    global $connection;
    $stmt = $connection->prepare("
        SELECT category_id
        FROM res_categories
        WHERE restaurant_id = :restaurant_id
    ");
    $stmt->execute([':restaurant_id' => $restaurant_id]);
    $categoryIds = $stmt->fetchAll(PDO::FETCH_COLUMN);
    return $categoryIds;
}

// Function to count the number of categories for the logged-in restaurant owner
function countCategories($restaurant_id)
{
    global $connection;
    $stmt = $connection->prepare("
        SELECT COUNT(*) AS category_count
        FROM res_categories
        WHERE restaurant_id = :restaurant_id
    ");
    $stmt->execute([':restaurant_id' => $restaurant_id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['category_count'];
}



function countFoods($restaurant_id, $category_id)
{
    global $connection;
    $stmt = $connection->prepare("
        SELECT COUNT(*) AS food_count
        FROM foods
        INNER JOIN res_categories ON foods.category_id = res_categories.category_id
        WHERE res_categories.restaurant_id = :restaurant_id AND foods.category_id = :category_id
    ");
    $stmt->execute([
        ':restaurant_id' => $restaurant_id,
        ':category_id' => $category_id
    ]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['food_count'] ?? 0;
}


// Function to count the number of unique customers who ordered from the logged-in restaurant owner
function countCustomers($restaurant_id)
{
    global $connection;
    $stmt = $connection->prepare("
        SELECT COUNT(DISTINCT user_id) AS customer_count
        FROM orderdetails
        WHERE restaurant_id = :restaurant_id
    ");
    $stmt->execute([':restaurant_id' => $restaurant_id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['customer_count'];
}

// Function to calculate the total profit for the logged-in restaurant owner
function profit($restaurant_id)
{
    global $connection;
    $stmt = $connection->prepare("
        SELECT SUM(total_price) AS total_profit
        FROM orderdetails
        WHERE restaurant_id = :restaurant_id
    ");
    $stmt->execute([':restaurant_id' => $restaurant_id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['total_profit'];
}

$user_id = 7; // Replace with the actual user ID of the logged-in restaurant owner

// Get the restaurant ID associated with the logged-in user
$restaurant_id = getRestaurantIdByUserId($user_id);

// Get the category IDs associated with the restaurant
$categoryIds = getCategory($restaurant_id);

// Display the total number of categories
$numCategories = countCategories($restaurant_id);

// Display the total number of unique customers
$numCustomers = countCustomers($restaurant_id);

// Display the total profit
$totalProfit = profit($restaurant_id);



