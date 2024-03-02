<?php

ob_start();

// var_dump($users[]);

?>

<div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
      <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <input type="text" placeholder="Enter keywords ..." required>
      </div>
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <div class="lang-switcher-wrapper">
        <button class="lang-switcher transparent-btn" type="button">
          EN
          <i data-feather="chevron-down" aria-hidden="true"></i>
        </button>
        <ul class="lang-menu dropdown">
          <li><a href="##">English</a></li>
          <li><a href="##">French</a></li>
          <li><a href="##">Uzbek</a></li>
        </ul>
      </div>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <div class="notification-wrapper">
        <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
          <span class="sr-only">To messages</span>
          <span class="icon notification active" aria-hidden="true"></span>
        </button>
        <ul class="users-item-dropdown notification-dropdown dropdown">
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">System just updated</span>
                <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon danger">
                <i data-feather="info" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">The cache is full!</span>
                <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">New Subscriber here!</span>
                <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
              </div>
            </a>
          </li>
          <li>
            <a class="link-to-page" href="##">Go to Notifications page</a>
          </li>
        </ul>
      </div>
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><source srcset="assets/images/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="assets/images/avatar/avatar-illustrated-02.png" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="##">
              <i data-feather="user" aria-hidden="true"></i>
              <span>Profile</span>
            </a></li>
          <li><a href="##">
              <i data-feather="settings" aria-hidden="true"></i>
              <span>Account settings</span>
            </a></li>
          <li><a class="danger" href="controllers/signout/signout.controller.php">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Dashboard</h2>
        <div class="row stat-cards">
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon primary">
                <i data-feather="bar-chart-2" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">1478 286</p>
                <p class="stat-cards-info__title">Total visits</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon warning">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">1478 286</p>
                <p class="stat-cards-info__title">Total visits</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit success">
                    <i data-feather="trending-up" aria-hidden="true"></i>0.24%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon purple">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">1478 286</p>
                <p class="stat-cards-info__title">Total visits</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit danger">
                    <i data-feather="trending-down" aria-hidden="true"></i>1.64%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon success">
                <i data-feather="feather" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">1478 286</p>
                <p class="stat-cards-info__title">Total visits</p>
                <p class="stat-cards-info__progress">
                  <span class="stat-cards-info__profit warning">
                    <i data-feather="trending-up" aria-hidden="true"></i>0.00%
                  </span>
                  Last month
                </p>
              </div>
            </article>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9">
            <div class="chart">
              <canvas id="myChart" aria-label="Site statistics" role="img"></canvas>
            </div>
            <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>
                  <tr class="users-table-info">
                    <th>
                      <label class="users-table__checkbox ms-20">
                        <input type="checkbox" class="check-all">Thumbnail
                      </label>
                    </th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <label class="users-table__checkbox">
                        <input type="checkbox" class="check">
                        <div class="categories-table-img">
                          <picture><source srcset="assets/images/categories/01.webp" type="image/webp"><img src="assets/images/categories/01.jpg" alt="category"></picture>
                        </div>
                      </label>
                    </td>
                    <td>
                      Starting your traveling blog with Vasco
                    </td>
                    <td>
                      <div class="pages-table-img">
                        <picture><source srcset="assets/images/avatar/avatar-face-04.webp" type="image/webp"><img src="assets/images/avatar/avatar-face-04.png" alt="User Name"></picture>
                        Jenny Wilson
                      </div>
                    </td>
                    <td><span class="badge-pending">Pending</span></td>
                    <td>17.04.2021</td>
                    <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <li><a href="##">Edit</a></li>
                          <li><a href="##">Quick edit</a></li>
                          <li><a href="##">Trash</a></li>
                        </ul>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="users-table__checkbox">
                        <input type="checkbox" class="check">
                        <div class="categories-table-img">
                          <picture><source srcset="assets/images/categories/02.webp" type="image/webp"><img src="assets/images/categories/02.jpg" alt="category"></picture>
                        </div>
                      </label>
                    </td>
                    <td>
                      Start a blog to reach your creative peak
                    </td>
                    <td>
                      <div class="pages-table-img">
                        <picture><source srcset="assets/images/avatar/avatar-face-03.webp" type="image/webp"><img src="assets/images/avatar/avatar-face-03.png" alt="User Name"></picture>
                        Annette Black
                      </div>
                    </td>
                    <td><span class="badge-pending">Pending</span></td>
                    <td>23.04.2021</td>
                    <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <li><a href="##">Edit</a></li>
                          <li><a href="##">Quick edit</a></li>
                          <li><a href="##">Trash</a></li>
                        </ul>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="users-table__checkbox">
                        <input type="checkbox" class="check">
                        <div class="categories-table-img">
                          <picture><source srcset="assets/images/categories/03.webp" type="image/webp"><img src="assets/images/categories/03.jpg" alt="category"></picture>
                        </div>
                      </label>
                    </td>
                    <td>
                      Helping a local business reinvent itself
                    </td>
                    <td>
                      <div class="pages-table-img">
                        <picture><source srcset="assets/images/avatar/avatar-face-02.webp" type="image/webp"><img src="assets/images/avatar/avatar-face-02.png" alt="User Name"></picture>
                        Kathryn Murphy
                      </div>
                    </td>
                    <td><span class="badge-active">Active</span></td>
                    <td>17.04.2021</td>
                    <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <li><a href="##">Edit</a></li>
                          <li><a href="##">Quick edit</a></li>
                          <li><a href="##">Trash</a></li>
                        </ul>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="users-table__checkbox">
                        <input type="checkbox" class="check">
                        <div class="categories-table-img">
                          <picture><source srcset="assets/images/categories/04.webp" type="image/webp"><img src="assets/images/categories/04.jpg" alt="category"></picture>
                        </div>
                      </label>
                    </td>
                    <td>
                      Caring is the new marketing
                    </td>
                    <td>
                      <div class="pages-table-img">
                        <picture><source srcset="assets/images/avatar/avatar-face-05.webp" type="image/webp"><img src="assets/images/avatar/avatar-face-05.png" alt="User Name"></picture>
                        Guy Hawkins
                      </div>
                    </td>
                    <td><span class="badge-active">Active</span></td>
                    <td>17.04.2021</td>
                    <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <li><a href="##">Edit</a></li>
                          <li><a href="##">Quick edit</a></li>
                          <li><a href="##">Trash</a></li>
                        </ul>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="users-table__checkbox">
                        <input type="checkbox" class="check">
                        <div class="categories-table-img">
                          <picture><source srcset="assets/images/categories/01.webp" type="image/webp"><img src="assets/images/categories/01.jpg" alt="category"></picture>
                        </div>
                      </label>
                    </td>
                    <td>
                      How to build a loyal community online and offline
                    </td>
                    <td>
                      <div class="pages-table-img">
                        <picture><source srcset="assets/images/avatar/avatar-face-03.webp" type="image/webp"><img src="assets/images/avatar/avatar-face-03.png" alt="User Name"></picture>
                        Robert Fox
                      </div>
                    </td>
                    <td><span class="badge-active">Active</span></td>
                    <td>17.04.2021</td>
                    <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <li><a href="##">Edit</a></li>
                          <li><a href="##">Quick edit</a></li>
                          <li><a href="##">Trash</a></li>
                        </ul>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="users-table__checkbox">
                        <input type="checkbox" class="check">
                        <div class="categories-table-img">
                          <picture><source srcset="assets/images/categories/03.webp" type="image/webp"><img src="assets/images/categories/03.jpg" alt="category"></picture>
                        </div>
                      </label>
                    </td>
                    <td>
                      How to build a loyal community online and offline
                    </td>
                    <td>
                      <div class="pages-table-img">
                        <picture><source srcset="assets/images/avatar/avatar-face-03.webp" type="image/webp"><img src="assets/images/avatar/avatar-face-03.png" alt="User Name"></picture>
                        Robert Fox
                      </div>
                    </td>
                    <td><span class="badge-active">Active</span></td>
                    <td>17.04.2021</td>
                    <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <li><a href="##">Edit</a></li>
                          <li><a href="##">Quick edit</a></li>
                          <li><a href="##">Trash</a></li>
                        </ul>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-lg-3">
            <article class="customers-wrapper">
              <canvas id="customersChart" aria-label="Customers statistics" role="img"></canvas>
                           <p class="customers__title">New Customers <span>+958</span></p>
              <p class="customers__date">28 Daily Avg.</p>
              <picture><source srcset="assets/images/svg/customers.svg" type="image/webp"><img src="assets/images/svg/customers.svg" alt=""></picture>
            </article>
            <article class="white-block">
              <div class="top-cat-title">
                <h3>Top categories</h3>
                <p>28 Categories, 1400 Posts</p>
              </div>
              <ul class="top-cat-list">
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Lifestyle <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Dailiy lifestyle articles <span class="purple">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Tutorials <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Coding tutorials <span class="blue">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Technology <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Dailiy technology articles <span class="danger">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      UX design <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      UX design tips <span class="success">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Interaction tips <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Interaction articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      App development <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Mobile development articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Nature <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Wildlife animal articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Geography <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Geography articles <span class="primary">+472</span>
                    </div>
                  </a>
                </li>
              </ul>
            </article>
          </div>
  <!-- ! Main nav -->
  <nav class="main-nav--bg">
    <div class="container main-nav">
      <div class="main-nav-start">
        <div class="search-wrapper">
          <i data-feather="search" aria-hidden="true"></i>
          <input type="text" placeholder="Find User ..." required>
        </div>
      </div>
      <div class="main-nav-end">
        <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
          <span class="sr-only">Toggle menu</span>
          <span class="icon menu-toggle--gray" aria-hidden="true"></span>
        </button>
        <div class="lang-switcher-wrapper">
          <button class="lang-switcher transparent-btn" type="button">
            EN
            <i data-feather="chevron-down" aria-hidden="true"></i>
          </button>
          <ul class="lang-menu dropdown">
            <li><a href="##">English</a></li>
            <li><a href="##">French</a></li>
            <li><a href="##">Uzbek</a></li>
          </ul>
        </div>
        <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
          <span class="sr-only">Switch theme</span>
          <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
          <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
        </button>
        <div class="notification-wrapper">
          <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
            <span class="sr-only">To messages</span>
            <span class="icon notification active" aria-hidden="true"></span>
          </button>
          <ul class="users-item-dropdown notification-dropdown dropdown">
            <li>
              <a href="##">
                <div class="notification-dropdown-icon info">
                  <i data-feather="check"></i>
                </div>
                <div class="notification-dropdown-text">
                  <span class="notification-dropdown__title">System just updated</span>
                  <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                    here.</span>
                </div>
              </a>
            </li>
            <li>
              <a href="##">
                <div class="notification-dropdown-icon danger">
                  <i data-feather="info" aria-hidden="true"></i>
                </div>
                <div class="notification-dropdown-text">
                  <span class="notification-dropdown__title">The cache is full!</span>
                  <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                    interfere ...</span>
                </div>
              </a>
            </li>
            <li>
              <a href="##">
                <div class="notification-dropdown-icon info">
                  <i data-feather="check" aria-hidden="true"></i>
                </div>
                <div class="notification-dropdown-text">
                  <span class="notification-dropdown__title">New Subscriber here!</span>
                  <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
                </div>
              </a>
            </li>
            <li>
              <a class="link-to-page" href="##">Go to Notifications page</a>
            </li>
          </ul>
        </div>
        <div class="nav-user-wrapper">
          <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
            <span class="sr-only">My profile</span>
            <span class="nav-user-img">
              <picture>
                <source srcset="assets/images/avatar/user.png" type="image/webp"><img src="assets/images/avatar/user.png" alt="User name">
              </picture>
            </span>
          </button>
          <ul class="users-item-dropdown nav-user-dropdown dropdown">
            <li><a href="##">
                <i data-feather="user" aria-hidden="true"></i>
                <span>Profile</span>
              </a></li>
            <li><a href="##">
                <i data-feather="settings" aria-hidden="true"></i>
                <span>Account settings</span>
              </a></li>
            <li><a class="danger" href="controllers/signout/signout.controller.php">
                <i data-feather="log-out" aria-hidden="true"></i>
                <span>Log out</span>
              </a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ! Main -->
  <main class="main users chart-page" id="skip-target">
    <div class="container">
      <h2 class="main-title">Dashboard</h2>
      <div class="row stat-cards">
        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon primary">
              <i data-feather="bar-chart-2" aria-hidden="true"></i>
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">1478 286</p>
              <p class="stat-cards-info__title">Total visits</p>
              <p class="stat-cards-info__progress">
                <span class="stat-cards-info__profit success">
                  <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                </span>
                Last month
              </p>
            </div>
          </article>
        </div>
        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon warning">
              <i data-feather="file" aria-hidden="true"></i>
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">1478 286</p>
              <p class="stat-cards-info__title">Total visits</p>
              <p class="stat-cards-info__progress">
                <span class="stat-cards-info__profit success">
                  <i data-feather="trending-up" aria-hidden="true"></i>0.24%
                </span>
                Last month
              </p>
            </div>
          </article>
        </div>
        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon purple">
              <i data-feather="file" aria-hidden="true"></i>
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">1478 286</p>
              <p class="stat-cards-info__title">Total visits</p>
              <p class="stat-cards-info__progress">
                <span class="stat-cards-info__profit danger">
                  <i data-feather="trending-down" aria-hidden="true"></i>1.64%
                </span>
                Last month
              </p>
            </div>
          </article>
        </div>
        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon success">
              <i data-feather="feather" aria-hidden="true"></i>
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">1478 286</p>
              <p class="stat-cards-info__title">Total visits</p>
              <p class="stat-cards-info__progress">
                <span class="stat-cards-info__profit warning">
                  <i data-feather="trending-up" aria-hidden="true"></i>0.00%
                </span>
                Last month
              </p>
            </div>
          </article>
        </div>
      </div>
      <div class="btn-add">
        <button type="submit" id="add-user-btn" class="btn btn-primary">Add User</button>
      </div>
      <div class="users-table table-wrapper">
        <table class="posts-table">
          <thead>
            <tr class="users-table-info">
              <th class="text-center ml-2">ID</th>
              <th>Author</th>
              <th>Username</th>
              <th>Email</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
<<<<<<< HEAD
            require "database/database.php";
            require "models/admin.model.php";
            $users = displayUser();
=======
            $users = getAllUsers();
>>>>>>> b38715ff6b315d0f12b6076d092c73510ef2eabc
            foreach ($users as $user) :
            ?>
              <tr>
                <td><?= $user['user_id'] ?></td>
                <td>
                  <div class="pages-table-img">
                    <picture>
<<<<<<< HEAD
                      <source srcset="assets/images/avatar/avatar-face-04.webp" type="image/webp"><img src="assets/images/avatar/avatar-face-04.png" alt="User Name">
=======
                        <!-- <source srcset="<?= $user['profile_img'] ?>" type="image/webp"> -->
                        <img src="assets/images/user/<?= $user['user_img'] ?>" alt="Profile Picture">
>>>>>>> b38715ff6b315d0f12b6076d092c73510ef2eabc
                    </picture>
                  </div>
                </td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['email'] ?></td>
<<<<<<< HEAD
                <td><?= $user['role_id'] ?></td>
=======
                <td>
                  <?php if (isset($user['role_type'])) {
                    echo $user['role_type'];
                  } else {
                    echo "Role Undefined";
                  } ?>
                </td>
>>>>>>> b38715ff6b315d0f12b6076d092c73510ef2eabc
                <td>
                  <span class="p-relative">
                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                      <div class="sr-only">More info</div>
                      <i data-feather="more-horizontal" aria-hidden="true"></i>
                    </button>
                    <ul class="users-item-dropdown dropdown">
<<<<<<< HEAD
                      <li id="pop-edit"><a href="##">Edit</a></li>
=======
                      <li id="update-user"><a href="##">Update</a></li>
>>>>>>> b38715ff6b315d0f12b6076d092c73510ef2eabc
                      <li id="pop-del"><a href="##">Delete</a></li>
                    </ul>
                  </span>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>

        </table>
      </div>
    </div>
<<<<<<< HEAD
    <!-- ========Pop Up Form Add user======== -->
    <div class="container-pop bg-dark text-dark bg-opacity-50 position-fixed top-50 start-50 translate-middle" style="display: none; z-index: 999; width:100%; height:100%">
      <div id="add-user popup-user" class="col-6 m-auto p-4 mt-3 bg-light">
        <form class="add-user popup-user" action="../../controllers/admin/create_user.controller.php" id="" method="post">
          <h1 class="mb-2 text-center">Add Customer</h1>
=======
    <!-- Pop-up form for adding a new user -->
    <div id="add-user-popup" class="container-pop bg-dark text-dark bg-opacity-50 position-fixed top-50 start-50 translate-middle" style="display: none; z-index: 999; width:100%; height:100%">
      <div class="col-6 m-auto p-4 mt-3 bg-light">
        <form class="add-user" method="post">
          <h1 class="mb-2 text-center">Add a new user</h1>
>>>>>>> b38715ff6b315d0f12b6076d092c73510ef2eabc
          <div class="mb-1">
            <label for="username" class="form-label text-secondary">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp">
          </div>
          <div class="mb-1">
            <label for="email" class="form-label text-secondary">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-1">
            <label for="password" class="form-label text-secondary">Password</label>
            <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp">
          </div>
          <div class="mb-1">
            <label for="number" class="form-label text-secondary">Phone Number</label>
            <input type="int" class="form-control" id="number" name="number" aria-describedby="numberHelp">
          </div>
          <div class="mb-2">
            <label for="role" class="form-label text-secondary">Role</label>
            <input type="text" class="form-control" name="role" id="role">
          </div>
          <input type="submit" class="btn btn-primary" name="send" value="Add" />
          <input type="button" class="btn btn-danger" id="add-user-cancel" value="Cancel" />
        </form>
      </div>
    </div>
    <!-- Pop-up form for updating a user -->
    <div id="update-user-popup" class="container-pop bg-dark text-dark bg-opacity-50 position-fixed top-50 start-50 translate-middle" style="display: none; z-index: 999; width:100%; height:100%">
      <div class="col-6 m-auto p-4 mt-3 bg-light">
        <form class="update-user" method="post">
          <h1 class="mb-2 text-center">Update user info</h1>
          <div class="mb-1">
            <label for="username" class="form-label text-secondary">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp">
          </div>
          <div class="mb-1">
            <label for="email" class="form-label text-secondary">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-1">
            <label for="password" class="form-label text-secondary">Password</label>
            <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp">
          </div>
          <div class="mb-1">
            <label for="number" class="form-label text-secondary">Phone Number</label>
            <input type="int" class="form-control" id="number" name="number" aria-describedby="numberHelp">
          </div>
          <div class="mb-2">
            <label for="role" class="form-label text-secondary">Role</label>
            <input type="text" class="form-control" name="role" id="role">
          </div>
          <input type="submit" class="btn btn-primary" name="send" value="Update" />
          <input type="button" class="btn btn-danger" id="update-user-cancel" value="Cancel" />
        </form>
      </div>
    </div>

<?php
echo "<script>
  document.addEventListener('DOMContentLoaded', function () {
    let addUserBtn = document.getElementById('add-user-btn');
    let addUserCancelBtn = document.getElementById('add-user-cancel');
    let updateUserCancelBtn = document.getElementById('update-user-cancel');
    let addUserPopup = document.getElementById('add-user-popup');
    let updateUserPopup = document.getElementById('update-user-popup');

    function showAddUserPopup() {
      addUserPopup.style.display = 'block';
    }

    function hideAddUserPopup() {
      addUserPopup.style.display = 'none';
    }

    function hideUpdateUserPopup() {
      updateUserPopup.style.display = 'none';
    }

    addUserBtn.addEventListener('click', showAddUserPopup);
    addUserCancelBtn.addEventListener('click', hideAddUserPopup);
    updateUserCancelBtn.addEventListener('click', hideUpdateUserPopup);

    let updateUserBtn = document.querySelectorAll('#update-user');
    
    

    
    function showUpdateUserPopup() {
      updateUserPopup.style.display = 'block';
    }

    for(let i = 0; i < updateUserBtn.length; i++) {
      updateUserBtn[i].addEventListener('click', showUpdateUserPopup);
    }
    
    let updateUserPopupVisible = false;
    updateUserBtn.addEventListener('click', function() {
      if (updateUserPopupVisible) {
        updateUserPopup.style.display = 'none';
      } else {
        updateUserPopup.style.display = 'block';
      }
      updateUserPopupVisible = !updateUserPopupVisible;
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
      let dropdown = document.querySelector('.users-item-dropdown.dropdown');
      let isClickInsideDropdown = dropdown.contains(event.target);
      if (!isClickInsideDropdown) {
        dropdown.style.display = 'none';
      }
    });

  });
</script>";
?>



  </main>