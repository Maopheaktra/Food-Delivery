<link rel="stylesheet" href="../../vendor/css/profile.css">
<link rel="stylesheet" href="../../vendor/css/popup.css">

<div class="osahan-profile">
    <div class="d-none">
        <div class="bg-primary border-bottom p-3 d-flex align-items-center">
            <a class="toggle togglew toggle-2" href="#"><span></span></a>
            <h4 class="font-weight-bold m-0 text-white">Profile</h4>
        </div>
    </div>

    <div class="container position-relative">
        <div class="py-5 osahan-profile row">
            <div class="col-md-4 mb-3">
                <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                    <div class="d-flex align-items-center p-3">
                        <div class="left mr-3">
                            <div class="upload" id="upload">
                                <img src="<?php print_r('assets/images/user/' . $img[7]) ?>" width="100" height="100" title="Change Profile">
                            </div>
                        </div>
                        <div class="right">
                            <h6 class="mb-1 font-weight-bold"><?php print_r($img[1]) ?><i class="feather-check-circle text-success"></i></h6>
                            <p class="text-muted m-0 small"><span class="__cf_email__" data-cfemail="fd949c90928e9c959c93bd9a909c9491d39e9290"><?php print_r($img[2]) ?></span>
                            </p>
                        </div>
                    </div>
                    </a>
                    <div class="osahan-credits d-flex align-items-center p-3 bg-light">
                        <p class="m-0">Accounts Credits</p>
                        <h5 class="m-0 ml-auto text-primary">$0.00</h5>
                    </div>

                    <div class="bg-white profile-details">
                        <a data-toggle="modal" data-target="#paycard" class="d-flex w-100 align-items-center border-bottom p-3">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1 text-dark">Payment Cards</h6>
                                <p class="small text-muted m-0">Add a credit or debit card</p>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a data-toggle="modal" data-target="#exampleModal" class="d-flex w-100 align-items-center border-bottom p-3">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1 text-dark">Address</h6>
                                <p class="small text-muted m-0">Add or remove a delivery address</p>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a class="d-flex align-items-center border-bottom p-3" data-toggle="modal" data-target="#inviteModal">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1">Refer Friends</h6>
                                <p class="small text-primary m-0">Get $10.00 FREE</p>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="faq.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i class="feather-truck bg-danger text-white p-2 rounded-circle mr-2"></i>
                                    Delivery Support</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="contact-us.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i class="feather-phone bg-primary text-white p-2 rounded-circle mr-2"></i>
                                    Contact</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="terms.html" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i class="feather-info bg-success text-white p-2 rounded-circle mr-2"></i> Term
                                    of use</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="privacy.html" class="d-flex w-100 align-items-center px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i class="feather-lock bg-warning text-white p-2 rounded-circle mr-2"></i>
                                    Privacy policy</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-3">
                <div class="rounded shadow-sm p-4 bg-white">
                    <h5 class="mb-4">My account</h5>
                    <div id="edit_profile">
                        <div>
                            <form action="controllers/profiles/change.account.info.controller.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputName1">Full Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1d" value="<?php print_r($img[1]) ?>" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputNumber1">Mobile Number</label>
                                    <input type="number" class="form-control" id="exampleInputNumber1" value="<?php print_r($img[6]) ?>" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" value="<?php print_r($img[2]) ?>" name="email">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                                </div>
                            </form>
                        </div>
                        <div class="additional">
                            <div class="change_password my-3">
                                <a href="forgot_password.html" class="p-3 border rounded bg-white btn d-flex align-items-center">Change
                                    Password
                                    <i class="feather-arrow-right ml-auto"></i></a>
                            </div>
                            <div class="deactivate_account">
                                <a href="forgot_password.html" class="p-3 border rounded bg-white btn d-flex align-items-center">Deactivate
                                    Account
                                    <i class="feather-arrow-right ml-auto"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="osahan-menu-fotter fixed-bottom bg-white px-3 py-2 text-center d-none">
        <div class="row">
            <div class="col">
                <a href="home.html" class="text-dark small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-home text-dark"></i></p>
                    Home
                </a>
            </div>
            <div class="col">
                <a href="most_popular.html" class="text-dark small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-map-pin"></i></p>
                    Trending
                </a>
            </div>
            <div class="col bg-white rounded-circle mt-n4 px-3 py-2">
                <div class="bg-danger rounded-circle mt-n0 shadow">
                    <a href="checkout.html" class="text-white small font-weight-bold text-decoration-none">
                        <i class="feather-shopping-cart"></i>
                    </a>
                </div>
            </div>
            <div class="col">
                <a href="favorites.html" class="text-dark small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-heart"></i></p>
                    Favorites
                </a>
            </div>
            <div class="col selected">
                <a href="profile.html" class="text-danger small font-weight-bold text-decoration-none">
                    <p class="h4 m-0"><i class="feather-user"></i></p>
                    Profile
                </a>
            </div>
        </div>
    </div>
</div>
<!-- =========form popup======== -->
<div id="contact-popup" style="display: none;">
    <form class="contact-form" id="" enctype="multipart/form-data" action="../../controllers/profiles/upload.php" method="post">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
        </svg>
        <div class="contain-img d-flex flex-column" style="margin-top: -40px;">
            <h1>Upload Profile</h1>
            <img class="rounded-circle m-auto" style="width: 150px; height: 150px;" src="<?php print_r('assets/images/user/' . $img[7]) ?>" alt="">
        </div>
        <div style="margin-top: 30px; margin-bottom: 10px;">
            <input type="file" name="my_image" id="image" class='btn bg-primary text-white' style="width: 100%;">
        </div>
        <div class="contain-btn d-flex justify-content-end" style="gap: 10px;">
            <input type="submit" id="send" name="send" value="Upload" />
        </div>
    </form>
</div>



<?php

echo "<script>

let pop = document.querySelector('#contact-popup');
let upload = document.querySelector('#upload');
let send = document.querySelector('#send');
let cancel = document.querySelector('.bi');
let footer = document.querySelector('footer');

upload.addEventListener('click', ()=>{
    pop.style.display = 'block';
});

send.addEventListener('click', ()=>{
    pop.style.display = 'none';
});

cancel.addEventListener('click', ()=>{
    pop.style.display = 'none';
});
</script>"

?>