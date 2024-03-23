<?php
$resId = $_SESSION['res_own']['restaurant_id'];
$categories = getCateInres($resId);
$numberOfFood = 0;
foreach ($categories as $key => $value) {
  $cateid = $value['category_id'];
  $statement = $connection->prepare("SELECT * FROM foods where category_id = $cateid");
  $statement->execute();
  $foods = $statement->fetchAll();
  $numberOfFood += count($foods);
}

$orderedFood = getFoodOrdered($resId, 4);


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
            <li><a href="/edite_res">
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
  <!-- ! Main --->

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
                <?= count($categories); ?>
              </p>
              <p class="stat-cards-info__title">All Categories</p>
            </div>
          </article>
        </div>




        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon warning">
              <img src="../../assets/images/icons/bibimbap.png" alt="foods">
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">
                <?= $numberOfFood; ?>
              </p>
              <p class="stat-cards-info__title">All Foods</p>
            </div>
          </article>
        </div>

        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon purple">
              <img src="../../assets/images/icons/return-of-investment.png" alt="Revenue">
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">$
                <?= sumMoney($resId)['sum(total_price)'] ?>.00
              </p>
              <p class="stat-cards-info__title">Revenue</p>
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
                <?= sumOrder($resId)['count(user_id)'] ?> people
              </p>
              <p class="stat-cards-info__title">All Orders</p>
            </div>
          </article>
        </div>
      </div>
    </div>




    <div class="container chart-summary mb-3 ">


      <div class="shadow-sm card w-100 bg-white p-0 m-0" style="border: none; box-sizing: box">

        <div class="card-header bg-white border-0" style="height: 50px">
          <div class=" bg-body-secondary d-flex justify-content-between w-100">
            <h1>Restaurant data</h1>
            <button class="btn btn-primary shadow-none" style="width:100px;" id="change-chart">Classic</button>
          </div>
        </div>


        <div class="card-body border-none rounded-0 p-0 bg-white">
          <div class="d-flex justify-content-between align-items-center">

            <div class="shadow-sm col-4 rounded border mx-2">
              <aside class="" id="doughnutchart" style="height: 340px;">

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                  google.charts.load("current", { packages: ["corechart"] });
                  google.charts.setOnLoadCallback(drawChart);
                  function drawChart() {
                    let data = google.visualization.arrayToDataTable([
                      ['Sale', 'Sale per month'],
                      ['Revenue',     <?= sumMoney($resId)['sum(total_price)'] ?>],
                      ['Cancel',     <?= sumCancelOrder()['count(user_id)'] ?>],
                      ['Orders',  <?= sumOrder($resId)['count(user_id)'] ?>],
                    ]);

                    let options = {
                      title: 'Restaurant Revenue ',
                      pieHole: 0.4,
                      height: 380,
                      width: 380,
                      backgroundColor: 'transparent',
                    };

                    let chart = new google.visualization.PieChart(document.getElementById('doughnutchart'));
                    chart.draw(data, options);
                  }
                </script>



              </aside>
            </div>


            <div class="shadow-sm col rounded mx-2 border border-light-subtle p-0"
              style="background-color: rgba(0, 0, 0, 0) !important;">

              <aside class="p-3 py-lg-3 d-flex align-items-center   justify-content-between" id="chart_div"
                style="height: 340px; padding-bottom: 30px;">


                <script type="text/javascript">
                  google.charts.load('current', { 'packages': ['bar'] });
                  google.charts.setOnLoadCallback(drawChart);

                  function drawChart() {
                    let date = new Date();
                    let currentYear = date.getFullYear();

                    let data = google.visualization.arrayToDataTable([
                      ['Month', 'Sales', 'Revenue'],
                      ['January ' + currentYear, 1000, 200],
                      ['February ' + currentYear, 1170, 250],
                      ['March ' + currentYear, 660, 300],
                      ['April ' + currentYear, 1030, 350],
                      ['May ' + currentYear, 1030, 350],
                      ['June ' + currentYear, 1030, 350],
                      ['July ' + currentYear, 1030, 350],
                      ['August ' + currentYear, 1030, 350],
                      ['September ' + currentYear, 1030, 350],
                      ['October ' + currentYear, 1030, 350],
                      ['November ' + currentYear, 1030, 350],
                      ['December ' + currentYear, 1030, 350]
                    ]);


                    let options = {
                      chart: {
                        title: 'Restaurant',
                        subtitle: 'Sales, Revenue: ' + currentYear,
                        backgroundColor: '#de3a3a',

                      },
                      bars: 'horizontal',
                      vAxis: {
                        format: 'decimal',
                        title: 'Months', titleTextStyle: { color: 'blue' }
                      },

                      height: 320,
                      width: 600,
                      bar: {
                        groupWidth: "90%",
                        alignment: 'center',
                        cornerRadius: 10,
                        opacity: 0.8,
                        animation: { duration: 1000, easing: 'out' },
                        style: 'fill: blue; stroke: black; stroke-width: 2',
                        tooltip: { trigger: 'hover', isHtml: true },
                      },
                      colors: ['#AF7AF3', '#12C4E0'],
                      legend: {
                        position: 'top',
                      },
                      backgroundColor: {
                        fill: 'transparent',
                      },
                    };

                    let classicChart;
                    let materialChart;

                    materialChart = new google.charts.Bar(document.getElementById('chart_div'));
                    materialChart.draw(data, google.charts.Bar.convertOptions(options));

                    let button = document.getElementById('change-chart');

                    button.onclick = function () {
                      if (button.innerText === 'Classic') {
                        classicChart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
                        classicChart.draw(data, options);
                        button.innerText = 'Material';
                      } else {
                        materialChart = new google.charts.Bar(document.getElementById('chart_div'));
                        materialChart.draw(data, google.charts.Bar.convertOptions(options));
                        button.innerText = 'Classic';
                      }
                    };
                  }


                </script>

              </aside>
            </div>
          </div>

        </div>


        <div class="card-footer d-flex justify-content-between align-items-center border-0" style="height: 60px">

          <div>
            <select id="rowCount" class="form-select shadow-none" style="width:100px" onchange="updateRowCount()">
              <option value="Select">Select</option>
              <option value="none">None</option>
              <option value="5">5 rows</option>
              <option value="10">10 rows</option>
              <option value="15">15 rows</option>
              <option value="all">All rows</option>
            </select>
          </div>
        </div>



      </div>

    </div>





    <!-- Recently selling and the most popular products -->
    <div class="container top-sale">


      <div class="shadow-sm card w-100 bg-white" style="border: none;">
        <table class="table border-light-subtle table-bordered">
          <thead class="table-body-secondary">
            <tr>
              <th class="text-center" scope="col">ID</th>
              <th class="text-center" scope="col">Name</th>
              <th class="text-center" scope="col">Quantity</th>
              <th class="text-center" scope="col">Amount</th>
              <th class="text-center" scope="col">Time</th>
            </tr>
          </thead>
          <tbody id="myTable">

            <!-- for loop to add the items more -->
            <?php foreach ($orderedFood as $key => $value): ?>
              <tr>
                <td class="text-center">
                  <?= $key + 1 ?>
                </td>
                <td class="text-center">
                  <?= $value['foodname'] ?>
                </td>
                <td class="text-center">
                  <?= $value['sum(quantity)'] ?>
                </td>
                <td class="text-center">
                  <?= $value['sum(total_price)'] ?>$
                </td>
                <td class="text-center">
                  <?= $value['time'] ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>


    <script>
      document.getElementById("rowCount").addEventListener("change", function () {
        applyFilters();
        toggleSortingOrder();
      });

      let descendingOrder = true;
      function toggleSortingOrder() {
        descendingOrder = !descendingOrder;
      }

      function applyFilters() {
        let select = document.getElementById("rowCount");
        let selectedOption = select.options[select.selectedIndex].value;
        let table = document.getElementById("myTable");
        let rows = table.getElementsByTagName("tr");

        for (let i = 0; i < rows.length; i++) {
          rows[i].style.display = "none";
        }

        if (selectedOption === "Select" || selectedOption === "all") {
          for (let i = 0; i < rows.length; i++) {
            rows[i].style.display = "";
          }
        } else {
          let numRowsToShow = parseInt(selectedOption, 10);
          if (!isNaN(numRowsToShow)) {
            for (let i = 0; i < numRowsToShow && i < rows.length; i++) {
              rows[i].style.display = "";
            }
          }
        }

        localStorage.setItem("selectedOption", selectedOption);
      }

      window.addEventListener("load", function () {
        let selectedOption = localStorage.getItem("selectedOption");
        if (selectedOption) {
          document.getElementById("rowCount").value = selectedOption;
          applyFilters();
        }
      });
    </script>




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