<?php
require "../../database/database.php";
require "../../models/employee.model.php";
// echo $_POST['food'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    if (isset($_POST['food']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['cate_id'])) {
        # code...
        // $img_name = $_FILES['my_image']['name'];
        // $img_siize = $_FILES['my_image']['size'];
        // $tmp_name = $_FILES['my_image']['tmp_name'];
        // $error = $_FILES['my_image']['error'];
        // if ($error === 0) {
        //     # code...
        //     header('header: /add_food');
        // }else{
        //     $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        //     $img_ex_lc = strtolower($img_ex);
        //     $allowed_exs = array("jpg", "jpeg", "png");
        //     if (in_array($img_ex_lc, $allowed_exs)) {
        //         $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
        //         $img_upload_path = '../../assets/images/foods'.$new_img_name;
        //         move_uploaded_file($tmp_name, $img_upload_path);
        //         echo uploadpf($_SESSION['Food_id'], $new_img_name);
        //         header('Location: /add_food');
        //         # code...
        //     }else{
        //         header("Location: /add_food");
        //     }
        // }
        $Name = $_POST['food'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $cate_id = $_POST['cate_id'];
        Add_New_Food($Name, $description, $price, $cate_id);
        header('Location: /all_food');
    }
}