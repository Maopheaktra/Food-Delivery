<?php
require "database/database.php";
require "models/employee.model.php";
require "views/restaurant_owner/food.view.php";
// echo $_POST['food'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    if (isset($_POST['food']) && isset($_POST['description']) && isset($_POST['price'])) {
        # code...
        $food = $_POST['food'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        Add_New_Food($Name, $description, $price);
        header('Location: /all_food');
    }
}