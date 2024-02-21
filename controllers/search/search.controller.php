<?php
require "database/database.php";
require "views/search/search.view.php";


$searchError = '';
$food_name = '';
//----------------TO DO SEARCH FOOD--------------------------
if (isset($_POST['search'])) {
    if (!empty($_POST['search'])) {
        # code...
        $searchFood = $_POST['search'];
        $statement = $connecton-> prepare("SELECT * FROM foods WHERE foodname LIKE '%$searchFood%'");
        $statement-> execute();
        $food_name = $statement->fetch_all();
    }else{
        $searchError  = "We cannot find this food";
    }
}