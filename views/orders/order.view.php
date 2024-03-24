<?php
<<<<<<< HEAD
    $FoodOrders = getAllorder($_SESSION['userid']);
=======
    $FoodOrders = (getOrderFood($_SESSION['userid'], 0));
    $cancelFood = (getOrderFood($_SESSION['userid'], 1));
>>>>>>> change_password
    $completedFood = (getOrderFood($_SESSION['userid'], 4));
?>
<div class="d-none">
        <div class="bg-primary border-bottom p-3 d-flex align-items-center">
            <a class="toggle togglew toggle-2" href="#"><span></span></a>
            <h4 class="font-weight-bold m-0 text-white">My Order</h4>
        </div>
    </div>
    <section class="py-4 osahan-main-body">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <ul class="nav nav-tabsa custom-tabsa border-0 flex-column bg-white rounded overflow-hidden shadow-sm p-2 c-t-order"
                        id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link border-0 text-dark py-3 active" id="completed-tab" data-toggle="tab"
                                href="#completed" role="tab" aria-controls="completed" aria-selected="true">
                                <i class="feather-check mr-2 text-success mb-0"></i> Completed</a>
                        </li>
                        <li class="nav-item border-top" role="presentation">
                            <a class="nav-link border-0 text-dark py-3" id="progress-tab" data-toggle="tab"
                                href="#progress" role="tab" aria-controls="progress" aria-selected="false">
                                <i class="feather-clock mr-2 text-warning mb-0"></i> On Progress</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content col-md-9" id="myTabContent">
                    <div class="tab-pane fade show active" id="completed" role="tabpanel"
                        aria-labelledby="completed-tab">
                        <div class="order-body">
                            <?php foreach($completedFood as $value): ?>
                            <div class="pb-3">
                                <div class="p-3 rounded shadow-sm bg-white">
                                    <div class="d-flex border-bottom pb-3">
                                        <div class="text-muted mr-3">
                                            <img alt="#" src="assets/images/popular5.png" class="img-fluid order_img rounded">
                                        </div>
                                        <div>
                                            <p class="mb-0 font-weight-bold"><a href="restaurant.html"
                                                    class="text-dark"><?php echo detailRes($value['restaurant_id'])['restaurant_name']?></a></p>
                                            <p class="mb-0"><?php echo detailRes($value['restaurant_id'])['address']?></p>
                                            <p class="mb-0 small"><a href="status_complete.html">View Details</a></p>
                                        </div>
                                        <div class="ml-auto">
                                            <p class="bg-success text-white py-1 px-2 rounded small mb-1 text-center">Delivered</p>
                                            <p class="small font-weight-bold text-center"><i class="feather-clock"></i>
                                            <?php echo $value['time'] ?></p>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-3">
                                        <div class="small">
                                            <?php 
                                            $orderCompleted = orderbyTime($_SESSION['userid'], $value['time'], 2); 
                                            $completTotalprice = 0;
                                            foreach ($orderCompleted as $key => $value):
                                                $completTotalprice += $value['total_price'];
                                            ?>
                                            <p class="text- font-weight-bold mb-0"><?= $value['foodname'].' '.'x'.' '.$value['quantity'] ?> </p>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="text-muted m-0 ml-auto mr-3 small">Total Payment<br>
                                            <span class="text-dark font-weight-bold"><?= $completTotalprice.'$' ?></span>
                                        </div>
                                        <div class="text-right">
                                            <a href="checkout.html" class="btn btn-primary px-3">Reorder</a>
                                            <a href="contact-us.html" class="btn btn-outline-primary px-3">Help</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="progress" role="tabpanel" aria-labelledby="progress-tab">
                        <div class="order-body">
                            <div class="pb-3">
                                <?php
                                foreach ($FoodOrders as $key => $value):
                                ?>
                                <?php if($value['action'] == 3 || $value['action'] == 0):?>
                                <div class="p-3 rounded shadow-sm bg-white">
                                    <div class="d-flex border-bottom pb-3">
                                        <div class="text-muted mr-3">
                                            <img alt="#" src="assets/images/popular1.png" class="img-fluid order_img rounded">
                                        </div>
                                        <div>
                                            <p class="mb-0 font-weight-bold"><a href="restaurant.html"
                                                    class="text-dark"><?php echo detailRes($value['restaurant_id'])['restaurant_name']?></a></p>
                                            <p class="mb-0"><?php echo detailRes($value['restaurant_id'])['address']?></p>
                                            <p class="mb-0 small"><a href="status_onprocess.html">View Details</a></p>
                                        </div>
                                        <div class="ml-auto">
                                            <p class="bg-warning text-white py-1 px-2 rounded small mb-1 text-center">On Process</p>
                                            <p class="small font-weight-bold text-center"><i class="feather-clock"></i>
                                                <?php echo $value['time'] ?></p>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-3">
                                        <div class="small">
                                            <?php
                                            $total_price = 0;
                                            $foodName = orderbyTime($_SESSION['userid'], $value['time'], 0);
                                            foreach ($foodName as $name):
                                                $total_price += $name['total_price'];
                                            ?>
                                            <p class="text- font-weight-bold mb-0"><?php echo $name['foodname'].' '.'x'.' '.$name['quantity'] ?></p>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="text-muted m-0 ml-auto mr-3 small">Total Payment<br>
                                            <span class="text-dark font-weight-bold"><?php echo $total_price.'$' ?></span>
                                        </div>
                                        <div class="text-right">
                                            <a href="controllers/orders/cancel.controller.php?orderid=<?php echo $value['time'] ?>" class="btn btn-primary px-3">Track</a>
                                            <a href="contact-us.html" class="btn btn-outline-primary px-3">Help</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="canceled" role="tabpanel" aria-labelledby="canceled-tab">
                        <div class="order-body">
                            <div class="pb-3">
                                
                            <?php
                            foreach ($cancelFood as $key => $value):
                            ?>
                                <div class="p-3 rounded shadow-sm bg-white">
                                    <div class="d-flex border-bottom pb-3">
                                        <div class="text-muted mr-3">
                                            <img alt="#" src="assets/images/popular6.png" class="img-fluid order_img rounded">
                                        </div>
                                        <div>
                                        <p class="mb-0 font-weight-bold"><a href="restaurant.html"
                                                    class="text-dark"><?php echo detailRes($value['restaurant_id'])['restaurant_name']?></a></p>
                                            <p class="mb-0"><?php echo detailRes($value['restaurant_id'])['address']?></p>
                                            <p class="mb-0 small"><a href="status_onprocess.html">View Details</a></p>
                                        </div>
                                        <div class="ml-auto">
                                            <p class="bg-danger text-white py-1 px-2 rounded small mb-1 text-center">Payment failed
                                            </p>
                                            <p class="small font-weight-bold text-center"><i class="feather-clock"></i>
                                            <?php echo $value['time'] ?></p>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-3">
                                        <div class="small">
                                        <?php
                                            $orderCancels = orderbyTime($_SESSION['userid'], $value['time'], 1);
                                            $cancelPrice = 0;
                                            foreach ($orderCancels as $ordercancel):
                                                $cancelPrice += $ordercancel['total_price'];
                                        ?>
                                        <p class="text- font-weight-bold mb-0"><?php echo $ordercancel['foodname'].' '.'x'.' '.$ordercancel['quantity']; ?></p>
                                        <?php endforeach; ?>
                                        </div>
                                        <div class="text-muted m-0 ml-auto mr-3 small">Total Payment<br>
                                            <span class="text-dark font-weight-bold"><?php echo $cancelPrice.'$' ?></span>
                                        </div>
                                        <div class="text-right">
                                            <a href="controllers/orders/cancel.controller.php?orderid=<?php echo $value['time'] ?>" class="btn btn-primary px-3">Cancel</a>
                                            <a href="contact-us.html" class="btn btn-outline-primary px-3">Help</a>
                                            <?php 
                                            if($value['action'] == 0):?>
                                            <a href="#" class="btn btn-primary px-3">added</a>
                                            <?php else: ?>
                                                <a href="#" class="btn btn-primary px-3">Pedding</a>
                                            <?php endif; ?>
                                            <a href="#" class="btn btn-outline-primary px-3">Help</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>