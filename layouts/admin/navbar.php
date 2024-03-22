<?php
require_once "database/database.php"; 
require_once "models/employee.model.php";
require_once "models/admin.model.php"; 
$users = getAllUsers();
$adminPf = showPf($_SESSION['userid']);


?>

<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
    <!-- ! Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-start">
            <div class="sidebar-head">
                <a href="/" class="logo-wrapper" title="Home">
                    <span class="sr-only">Home</span>
                    <span class="icon logo" aria-hidden="true"></span>
                    <div class="logo-text">
                        <span class="logo-title">Elegant</span>
                        <span class="logo-subtitle">Dashboard</span>
                    </div>

                </a>
                <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                    <span class="sr-only">Toggle menu</span>
                    <span class="icon menu-toggle" aria-hidden="true"></span>
                </button>
            </div>
            <div class="sidebar-body">
                <ul class="sidebar-body-menu">
                    <li>
                        <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon folder" aria-hidden="true"></span>Categories
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="categories.html">All categories</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon paper" aria-hidden="true"></span>Pages
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="pages.html">All pages</a>
                            </li>
                            <li>
                                <a href="new-page.html">Add new page</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="comments.html">
                            <span class="icon message" aria-hidden="true"></span>
                            Comments
                        </a>
                        <span class="msg-counter">7</span>
                    </li>
                </ul>
                <span class="system-menu__title">system</span>
                <ul class="sidebar-body-menu">
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon user-3" aria-hidden="true"></span>All users
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

                                <a href="users-01.html">Users-01</a>
                            </li>
                            <li>
                                <a href="users-02.html">Users-02</a>
=======
>>>>>>> DEVELOP
=======
>>>>>>> add_category
=======
>>>>>>> add_food
                                <a href="runners.filter.php">Runners</a>
=======
                                <a href="/delivery">Runners</a>
>>>>>>> restaurant_response_order
                            </li>
                            <li>
                                <a href="/customer">Customers</a>
                            </li>
                            <li>
                                <a href="/res_onwer">Owners</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="##"><span class="icon setting" aria-hidden="true"></span>Settings</a>
                    </li>
                </ul>
            </div>
        </div>
        
    </aside>