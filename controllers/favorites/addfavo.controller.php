<?php
require "../../database/database.php";
require "../../models/employee.model.php";

addFavorites($_GET['favoid']);

header('Location: /favorite');