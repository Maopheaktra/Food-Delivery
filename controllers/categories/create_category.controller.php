<?php 
<<<<<<< HEAD
=======
session_start();
>>>>>>> res_pay
require "../../database/database.php";
require "../../models/employee.model.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['cate']) && isset($_POST['description'])) {
        # code...
        $cateName = $_POST['cate'];
        $description = $_POST['description'];
        addCategories($cateName, $description);
<<<<<<< HEAD
=======
        $cateid = getCateLimited()['category_id'];
        addToresCate($cateid, $_SESSION['res_own']['restaurant_id']);
>>>>>>> res_pay
        header('Location: /');
    }
}
