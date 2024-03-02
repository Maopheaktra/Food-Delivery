<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/' => 'controllers/admin/admin.controller.php',
<<<<<<< HEAD
    '/trainer-review' => 'controllers/reviews/review.controller.php',
    '/trainer-classroom' => 'controllers/classroom/classroom.controller.php',
    '/create-user' => 'controllers/admin/admin.controller.php',
=======
>>>>>>> b38715ff6b315d0f12b6076d092c73510ef2eabc
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}
require "layouts/admin/header.php";
require "layouts/admin/navbar.php";
require $page;
require "layouts/admin/footer.php";