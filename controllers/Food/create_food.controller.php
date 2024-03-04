<?php
require "../../database/database.php";
require "../../models/employee.model.php";
// echo $_POST['food'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    if (isset($_POST['food']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['cate_id'])) {
        # code...
        $Name = $_POST['food'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $cate_id = $_POST['cate_id'];
        Add_New_Food($Name, $description, $price, $cate_id);
        header('Location: /all_food');
    }
}