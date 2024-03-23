<?php

// $user_id = $_SESSION['userid'];
// $restaurant_id = getOneRestaurant($_SESSION['userid']);

// function createRes($resname, $address, $resDes, $userid, $timeopen, $timeclose)
// {
//     global $connection;
//     $statement = $connection->prepare("insert into restaurants(restaurant_name, address, time_open, description, user_id, time_close) values (:resname, :address, :timeopen, :resDes, :userid, :timeclose)");
//     $statement->execute([
//         ':resname' => $resname,
//         ':address' => $address,
//         ':timeopen' => $timeopen,
//         ':resDes' => $resDes,
//         ':userid' => $userid,
//         ':timeclose' => $timeclose,
//     ]);
// }

// function getRestaurant($userid)
// {
//     global $connection;
//     $statement = $connection->prepare("select * from restaurants where user_id = :userid");
//     $statement->execute([':userid' => $userid]);
//     return $statement->fetch();
// }

// function getFoodOrder($resid, $action)
// {
//     global $connection;
//     $statement = $connection->prepare("select * from orderdetails where restaurant_id = :resid && action = :action group by time");
//     $statement->execute([
//         ':resid' => $resid,
//         ':action' => $action
//     ]);
//     return $statement->fetchAll();
// }

// function orderbyTimeInres($resid, $time, $action)
// {
//     global $connection;
//     $statement = $connection->prepare("SELECT * FROM orderdetails WHERE restaurant_id = :resid && action = :action && time = :time");
//     $statement->execute([
//         ':resid' => $resid,
//         ':time' => $time,
//         ':action' => $action
//     ]);
//     return $statement->fetchAll();
// }


// function orderResponse($resid, $time, $action)
// {
//     global $connection;
//     $statement = $connection->prepare("update orderdetails set action = :action where restaurant_id = :res_id && time = :time");
//     $statement->execute([
//         ":res_id" => $resid,
//         ":time" => $time,
//         ":action" => $action,
//     ]);
// }




// // Function to get the restaurant ID based on the user ID
// function getOneRestaurant($user_id)
// {
//     global $connection;
//     $statement = $connection->prepare("
//         SELECT restaurant_id
//         FROM restaurants
//         WHERE user_id = :user_id
//     ");
//     $statement->execute([':user_id' => $user_id]);
//     $result = $statement->fetch(PDO::FETCH_ASSOC);
//     return $result['restaurant_id'];
// }

// // echo "Get restaurant by ID goes by here:" . getRestaurantIdByUserId($user_id);


// // Function to get the categories associated with a restaurant
// function getCategory($restaurant_id)
// {
//     global $connection;
//     $statement = $connection->prepare("
//         SELECT category_id
//         FROM res_categories
//         WHERE restaurant_id = :restaurant_id
//     ");
//     $statement->execute([':restaurant_id' => $restaurant_id]);
//     $categories = $statement->fetchAll(PDO::FETCH_COLUMN);
//     return $categories;
// }






// //! Function to get the number of categories associated with a restaurant
// function countCategories($restaurant_id)
// {
//     global $connection;
//     $statement = $connection->prepare("
//         SELECT COUNT(*) AS category_count
//         FROM res_categories
//         WHERE restaurant_id = :restaurant_id
//     ");
//     $statement->execute([':restaurant_id' => $restaurant_id]);
//     $result = $statement->fetch(PDO::FETCH_ASSOC);
//     return $result['category_count'];
// }

// //! Call the countCategories function with the restaurant ID from the session


// function countFoods($restaurant_id, $category_id)
// {
//     global $connection;
//     $statement = $connection->prepare("
//         SELECT COUNT(*) AS food_count
//         FROM foods
//         INNER JOIN res_categories ON foods.category_id = res_categories.category_id
//         WHERE res_categories.restaurant_id = :restaurant_id AND foods.category_id = :category_id
//     ");
//     $statement->execute([
//         ':restaurant_id' => $restaurant_id,
//         ':category_id' => $category_id
//     ]);

//     $foods = $statement->fetch(PDO::FETCH_ASSOC);
//     return $foods['food_count'] ?? 0;
// }



// function countOrder($restaurant_id)
// {
//     global $connection;
//     $statement = $connection->prepare("SELECT COUNT(*) AS total_orders FROM orderdetails WHERE restaurant_id = :restaurant_id");
//     $statement->execute([':restaurant_id' => $restaurant_id]);
//     $result = $statement->fetch(PDO::FETCH_ASSOC);
//     return $result['total_orders'];
// }



// //! Function to calculate the total profit for the logged-in restaurant owner
// function profit($restaurant_id)
// {
//     global $connection;
//     $statement = $connection->prepare("
//         SELECT SUM(total_price) AS total_profit
//         FROM orderdetails
//         WHERE restaurant_id = :restaurant_id AND action = 4
//     ");
//     $statement->execute([
//         ':restaurant_id' => $restaurant_id,
//     ]);
//     $result = $statement->fetch(PDO::FETCH_ASSOC);
//     return $result['total_profit'] ?? 0; 
// }
?>



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
function getFoodOrdered($resid, $action)
{
    global $connection;
    $statement = $connection->prepare("select sum(quantity), foodname, sum(total_price), time from orderdetails where restaurant_id = :resid && action = :action group by foodname order by quantity asc");
    $statement->execute([
        ':resid' => $resid,
        ':action' => $action
    ]);
    return $statement->fetchAll();
}

function orderbyTimeInres($resid, $time, $action)
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM orderdetails WHERE restaurant_id = :resid && action = :action && time = :time");
    $stmt->execute([
        ':resid' => $resid,
        ':time' => $time,
        ':action' => $action
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

function editeRestaurant($resid, $resname, $resimg, $resAddress, $resOpen, $resClose)
{
    global $connection;
    $statement = $connection->prepare("update restaurants set restaurant_name = :resname, address = :resaddress, time_open = :resOpen, time_close = :resClose, res_img = :resimg where restaurant_id = :resid");
    $statement->execute([
        ':resname' => $resname,
        ':resaddress' => $resAddress,
        ':resOpen' => $resOpen,
        ':resClose' => $resClose,
        ':resimg' => $resimg,
        ':resid' => $resid,
    ]);
}

function sumMoney($resid)
{
    global $connection;
    $statement = $connection->prepare("select sum(total_price) from orderdetails where restaurant_id = :resid && action = 4");
    $statement->execute([':resid' => $resid]);
    return $statement->fetch();
}

function sumOrder($resid)
{
    global $connection;
    $statement = $connection->prepare("select count(user_id) from orderdetails where restaurant_id = :resid group by user_id");
    $statement->execute([':resid' => $resid]);
    return $statement->fetch();
}


function sumCancelOrder()
{
    global $connection;
    $statement = $connection->prepare("select count(user_id) from orderdetails where action = 5");
    $statement->execute();
    return $statement->fetch();
}


function reviewOrder($resId, $customerId, $time, $content)
{
    global $connection;
    $statement = $connection->prepare("insert into orders (date, user_id, restaurant_id, content) values (:date, :user_id, :restaurant_id, :content)");
    $statement->execute([
        ':date' => $time,
        ':user_id' => $customerId,
        ':restaurant_id' => $resId,
        ':content' => $content
    ]);
}