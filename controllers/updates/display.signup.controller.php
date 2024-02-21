<?php
require_once '../../models/user.model.php';

// Check if user ID is provided in the URL
if (!isset($_GET['user_id'])) {
    echo "User ID parameter is missing.";
    exit();
}
$user_id = $_GET['user_id'];

// Retrieve user data by ID
$user = getUserById($user_id);

require '../../views/updates/update.view.php';
