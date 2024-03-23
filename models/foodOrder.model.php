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


function orderbyTime($user_id, $time, $actoin){
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM orderdetails WHERE user_id = :user_id && action = :action && time = :time");
    $stmt->execute([
        ':user_id'=> $user_id,
        ':time'=> $time,
        ':action'=> $actoin
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
