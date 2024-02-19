<?php
function sanitizeValues(array $listOfValues): mixed
{
    $list = [];
    // Loop to clean each item in list:
    foreach ($listOfValues as $key => $value) {
        // Assign the cleaned item to $list:
        $list[$key] = htmlspecialchars($value);
    }
    // Return the array if true, else return null:
    return !empty($list) ? $list : null;
}

function login(string $email, string $password){
    
}
