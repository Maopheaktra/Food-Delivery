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


function countCancel($user_id)
{
    global $connection;
    $statement = $connection->prepare("SELECT COUNT(*) AS cancel_count FROM orderdetails WHERE action = 3 AND user_id = :user_id");
    $statement->execute([':user_id' => $user_id]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result['cancel_count'];
}

$cancel_count = countCancel($user_id);
echo "The number of canceled orders for user with ID $user_id is: $cancel_count";


