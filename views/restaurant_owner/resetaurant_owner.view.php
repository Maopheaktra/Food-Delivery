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
              <a href="#">
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
                <source srcset="../../assets/images/user/<?= $resOwner['user_img'] ?>" type="image/webp"><img
                  src="../../assets/images/user/<?= $resOwner['user_img'] ?>" alt="User name">
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
      <div class="row stat-cards">
        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon primary">
              <img src="../../assets/images/icons/cutlery.png" alt="categories">
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">
                <?= countCategories($restaurant_id); ?>
              </p>
              <p class="stat-cards-info__title">All Categories</p>
            </div>
          </article>
        </div>


        <?php
        $foods = 0;
        $categories = getCategory($restaurant_id);
        foreach ($categories as $category) {
          $foods += countFoods($restaurant_id, $category);
        }
        ?>

        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon warning">
              <img src="../../assets/images/icons/bibimbap.png" alt="foods">
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">
                <?= $foods; ?>
              </p>
              <p class="stat-cards-info__title">All Foods</p>
            </div>
          </article>
        </div>

        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon purple">
              <img src="../../assets/images/icons/return-of-investment.png" alt="profit">
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">$
                <?= profit($restaurant_id); ?>.00
              </p>
              <p class="stat-cards-info__title">Profitable</p>
            </div>
          </article>
        </div>
        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon success">
              <img src="../../assets/images/icons/online-order.png" alt="orders">
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">
                <?= countOrder($restaurant_id) ?> people
              </p>
              <p class="stat-cards-info__title">All Orders</p>
            </div>
          </article>
        </div>
      </div>
    </div>




    <div class="container content-2">
      <div class="row stat-cards">
        <div class="col-md-6 col-xl-3">
          <article class="d-flex justify-content-between stat-cards-item shadow-sm" style="background-color:#ff9f43;">

            <div class="stat-cards-info">
              <p style="font-size:20px" class=" text-white">Stock </p>
              <p class="stat-cards-info__num">
                word
              </p>
            </div>
            <div class=" justify-content-end stat-cards-icon primary">

            </div>
          </article>
        </div>




        <div class="col-md-6 col-xl-3">
          <article class="d-flex justify-content-between stat-cards-item shadow-sm" style="background-color:#00cfe8;">

            <div class="stat-cards-info">
              <p style="font-size:20px;" class=" text-white">All Foods</p>
              <p style="font-size:20px; color: #1e5794;" class="stat-cards-info__num">
                word
              </p>
            </div>

            <div class="stat-cards-icon warning bg-danger ">

            </div>
          </article>
        </div>

        <div class="col-md-6 col-xl-3">
          <article class="d-flex justify-content-between stat-cards-item shadow-sm" style="background-color:#13e2ea;">

            <div class="stat-cards-info">
              <p style="font-size:20px;" class=" text-white">Profitable</p>
              <p style="font-size:20px; color: #1e5794;" class="stat-cards-info__num">
                word
              </p>
            </div>

            <div class="stat-cards-icon purple">

            </div>
          </article>
        </div>
        <div class="col-md-6 col-xl-3 ">
          <article class="d-flex justify-content-between stat-cards-item shadow-lg" style="background-color:#28c76f;">

            <div class="stat-cards-info">

              <p style="font-size:20px;" class=" text-white">All Orders</p>
              <p style="font-size:20px; color: #1e5794;" class="stat-cards-info__num">
                word
              </p>
            </div>

            <div class="stat-cards-icon success bg-body-secondary ">

            </div>
          </article>
        </div>
      </div>
    </div>



    <div class="container chart-summary mb-3 ">


      <div class="shadow-sm card w-100 bg-white p-0 m-0" style="border: none; box-sizing: box">

        <div class="card-header bg-white border-0" style="height: 50px">
          <div class="d-flex justify-content-between w-100">
            <h1>Header</h1>

          </div>
        </div>


        <script type="text/javascript" src="../../vendor/js/jquery.min.js"></script>
        <script type="text/javascript" src="../../vendor/js/Chart.min.js"></script>


        <div class="card-body border-none rounded-0 p-0 bg-white">
          <div class="d-flex justify-content-between align-items-center">
            <div class="shadow-sm col-5 rounded border d-flex justify-content-center mx-2" style="height: 320px;">
              <div class="shrink-size d-flex justify-content-center align-items-center align-items-center  mt-3 "
                style="width: 250px; height:240px;">

                <canvas id="pie-graphCanvas" style="width: 250px; height:320px;" class=""></canvas>
              </div>
            </div>
            <div class="shadow-sm col rounded mx-2 border border-light-subtle"
              style="height: 320px; background-color: rgba(0, 0, 0, 0) !important;">
              <canvas class="p-1" id="bar-graphCanvas" style="background-color: transparent !important;"></canvas>
            </div>
          </div>

        </div>



        <script type="text/javascript">
          $(document).ready(function () {
            $.ajax({
              url: "../../controllers/restaurant_owner/chart.controller.php",
              method: "GET",
              success: function (data) {
                console.log(data);
                let barLabels = [];
                let barSales = [];
                let barExpenses = [];
                let barProfit = [];
                let pieLabels = [];
                let pieSales = [];

                for (let i = 0; i < data.sales.length; i++) {
                  barLabels.push(data.sales[i].month);
                  barSales.push(data.sales[i].amount);
                  barExpenses.push(data.expenses[i].amount);
                  barProfit.push(data.profit[i].amount);
                  if (i < 3) {
                    pieLabels.push(data.sales[i].month);
                    pieSales.push(data.sales[i].amount);
                  }
                }

                let barChartData = {
                  labels: barLabels,
                  datasets: [{
                    label: 'Sales',
                    backgroundColor: '#3c8dbc',
                    borderColor: '#3c8dbc',
                    borderWidth: 1,
                    data: barSales
                  },
                  {
                    label: 'Expenses',
                    backgroundColor: '#f56954',
                    borderColor: '#f56954',
                    borderWidth: 1,
                    data: barExpenses
                  },
                  {
                    label: 'Profit',
                    backgroundColor: '#00a65a',
                    borderColor: '#00a65a',
                    borderWidth: 1,
                    data: barProfit
                  }
                  ]
                };

                let pieChartData = {
                  labels: pieLabels,
                  datasets: [{
                    label: 'Sales',
                    backgroundColor: ['#3c8dbc', '#f56954', '#00a65a'],
                    borderColor: ['#3c8dbc', '#f56954', '#00a65a'],
                    borderWidth: 1,
                    data: pieSales
                  }]
                };

                let barGraphTarget = $("#bar-graphCanvas");
                let pieGraphTarget = $("#pie-graphCanvas");

                let barGraph = new Chart(barGraphTarget, {
                  type: 'bar',
                  data: barChartData,
                  options: {
                    scales: {
                      yAxes: [{
                        ticks: {
                          beginAtZero: true
                        }
                      }]
                    }
                  }
                });

                let pieGraph = new Chart(pieGraphTarget, {
                  type: 'pie',
                  data: pieChartData,
                  options: {
                    legend: {
                      position: 'start',
                      labels: {
                        boxWidth: 5,
                        fontSize: 8
                      }
                    }
                  }
                });
              },
              error: function (data) {
                console.log(data);
              }
            });
          });



        </script>

        <div class="card-footer bg-white border-0" style="height: 50px">

        </div>


      </div>

    </div>





    <!-- Recently selling and the most popular products -->
    <div class="container top-sale ">

      <div class="shadow-sm card w-100 bg-white" style="border: none  ;">

        <table class="table border-light-subtle table-bordered">
          <thead class="">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Category</th>
              <th scope="col">Quantity</th>
              <th scope="col">Amount</th>
            </tr>
          </thead>
          <tbody>

            <!-- for loop to add the items more -->
            <tr>
              <td>1</td>
              <td>Sed</td>
              <td>Fries</td>
              <td>2</td>
              <td>4</td>
            </tr>
          </tbody>
        </table>
      </div>


    </div>

  </main>
</div>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css"
  href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../vendor/plugins/chart.min.js"></script>
<script src="../../vendor/plugins/feather.min.js.map"></script>