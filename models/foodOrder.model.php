<?php

function getOrderFood($user_id, $action){
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM orderdetails WHERE user_id = :user_id && action = :action group by time");
    $stmt->execute([
        ':user_id'=> $user_id,
        ':action'=>  $action
    ]);
    return $stmt->fetchAll();
}
function getAllorder($user_id){
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM orderdetails WHERE user_id = :user_id group by time");
    $stmt->execute([
        ':user_id'=> $user_id
    ]);
    return $stmt->fetchAll();
}

function orderbyTime($user_id, $time){
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM orderdetails WHERE user_id = :user_id && time = :time");
    $stmt->execute([
        ':user_id'=> $user_id,
        ':time'=> $time
    ]);
    return $stmt->fetchAll();
}

function cancel($action, $cancel, $user_id){
    global $connection;
    $stmt = $connection->prepare("update orderdetails set action=:action where time = :cancel && user_id = :user_id");
    $stmt->execute([
        ':cancel'=> $cancel,
        ':action'=> $action,
        ':user_id'=> $user_id
    ]);
}

function deliverFood($action){
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM ((orderdetails inner join users on users.user_id = orderdetails.user_id) inner join restaurants on restaurants.restaurant_id = orderdetails.restaurant_id) WHERE action = :action group by time");
    $stmt->execute([
        ':action'=>  $action,
    ]);
    return $stmt->fetchAll();
}

function deliverResponse($action, $cancel){
    global $connection;
    $stmt = $connection->prepare("update orderdetails set action=:action where time = :cancel");
    $stmt->execute([
        ':cancel'=> $cancel,
        ':action'=> $action
    ]);
}

function getAllFood(){
    global $connection;
    $stmt = $connection->prepare("select * from (((res_categories inner join categories on res_categories.category_id = categories.category_id) inner join foods on categories.category_id =  foods.category_id) inner join restaurants on restaurants.restaurant_id =  res_categories.restaurant_id)");
    $stmt->execute();
    return $stmt->fetchAll();
}
