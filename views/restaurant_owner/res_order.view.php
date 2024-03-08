
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
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><source srcset="../../assets/images/user/<?= $resOwner['user_img'] ?>" type="image/webp"><img src="../../assets/images/user/<?= $resOwner['user_img'] ?>" alt="User name"></picture>
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

<div class="container_resorder">
        <div class="navres">
            <h4 style="color: white;">Manage order</h4>
            <div class="content_action">
              <a href="#" id="pedding" class="btn">Pedding</a>
              <a href="#"  id="response" class="btn">Response</a>
            </div>
        </div>
        <div id="content" class="content">
          <?php foreach ($padding as $key => $value): ?>
            <div class="card">
                <div class="card-header">
                    <div class="card-id">
                        <p><?= "id ".$value['orderDetail_id'] ?></p>
                    </div>
                    <div class="card-time">
                        <i class='bx bx-time'></i>
                        <span>: <?= $value['time'] ?></span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="foodname">
                      <?php
                        $foodOd = (orderbyTimeInres($resid, $value['time'], 0));
                        $totalPrice = 0;
                        foreach ($foodOd as $key => $food):
                        $totalPrice += $food['total_price'];
                      ?>
                        <p><?= $food['foodname'] ?> <span>x <?= $food['quantity'] ?></span></p>
                      <?php endforeach; ?>
                    </div>
                    <div class="total-price">
                        <p style="font-weight: bold; color: green;">total price: <span><?= $totalPrice." $" ?></span></p>
                    </div>

                </div>
                <div class="card-footer">
                    <button><a href="controllers/restaurant_owner/response_food.controller.php?time=<?= $value['time'] ?>"><i class='bx bx-check'></i>Complete</a></button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div id="content1" class="hide">
          <?php foreach ($responseOrder as $key => $value): ?>
            <div class="card">
                <div class="card-header">
                    <div class="card-id">
                        <p><?= "A".$value['orderDetail_id'] ?></p>
                    </div>
                    <div class="card-time">
                        <i class='bx bx-time'></i>
                        <span>:<?= $value['time'] ?></span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="foodname">
                      <?php
                        $foodOd = (orderbyTimeInres($resid, $value['time'], 3));
                        $totalPrice = 0;
                        foreach ($foodOd as $key => $food):
                        $totalPrice += $food['total_price'];
                      ?>
                        <p><?= $food['foodname'] ?> <span>x <?= $food['quantity'] ?></span></p>
                      <?php endforeach; ?>
                    </div>
                    <div class="total-price">
                        <p style="font-weight: bold; color: green;">total price: <span><?= $totalPrice." $" ?></span></p>
                    </div>

                </div>
                <div class="card-footer">
                    <button><i class='bx bx-check'></i>Responsed</button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php
    echo '<script>
    let response = document.querySelector("#response");
    let pedding = document.querySelector("#pedding");
    let content = document.querySelector("#content");
    let content1 = document.querySelector("#content1");
    
    response.addEventListener("click", ()=>{
      content.setAttribute("class", "hide");
      content1.setAttribute("class", "content");
      console.log("hello");
    })
    pedding.addEventListener("click", ()=>{
      content1.setAttribute("class", "hide");
      content.setAttribute("class", "content");
      console.log("haha");
    });
    </script>'


      ?>