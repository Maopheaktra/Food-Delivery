<?php

session_start();
require "../../database/database.php";
require "../../models/foodOrder.model.php";


cancel(1, $_GET['orderid'], $_SESSION['userid']);

header('Location: /order');
