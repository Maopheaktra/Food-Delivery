<?php

function createRes($resname, $address, $resDes, $userid, $timeopen, $timeclose){
    global $connection;
    $statement = $connection->prepare("insert into restaurants(restaurant_name, address, time_open, description, user_id, time_close) values (:resname, :address, :timeopen, :resDes, :userid, :timeclose)");
    $statement->execute([
        ':resname'=> $resname,
        ':address'=> $address,
        ':timeopen'=> $timeopen,
        ':resDes'=> $resDes,
        ':userid'=> $userid,
        ':timeclose'=> $timeclose,
    ]);
}

function getRestaurant($userid){
    global $connection;
    $statement = $connection->prepare("select * from restaurants where user_id = :userid");
    $statement->execute([':userid'=>$userid]);
    return $statement->fetch();
}

function getFoodOrder($resid, $action){
    global $connection;
    $statement = $connection->prepare("select * from orderdetails where restaurant_id = :resid && action = :action group by time");
    $statement->execute([
        ':resid'=> $resid,
        ':action'=> $action
    ]);
    return $statement->fetchAll();
}

function orderbyTimeInres($resid, $time, $actoin){
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM orderdetails WHERE restaurant_id = :resid && action = :action && time = :time");
    $stmt->execute([
        ':resid'=> $resid,
        ':time'=> $time,
        ':action'=> $actoin
    ]);
    return $stmt->fetchAll();
}


function orderResponse($resid, $time, $action){
    global $connection;
    $statement = $connection->prepare("update orderdetails set action = :action where restaurant_id = :res_id && time = :time");
    $statement->execute([
        ":res_id"=> $resid,
        ":time"=> $time,
        ":action"=> $action,
    ]);
}