<?php 
require "../../database/database.php";
require "../../models/employee.model.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['cate']) && isset($_POST['description'])) {
        # code...
        $cateName = $_POST['cate'];
        $description = $_POST['description'];
        addCategories($cateName, $description);
        header('Location: /');
    }
}
