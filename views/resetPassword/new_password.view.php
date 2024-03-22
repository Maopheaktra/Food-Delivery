<div class="container mt-5 d-grid">
    <div class="card p-3" style="width:400px">
        <form action="controllers/reset/new_Password.controller.php" method = "post" class="form-col">
            <h4 class="card-title">New Password</h4>
            <p>Enter New Passord</p>
            <div class="group-form">
                <label for="otp">Enter Your Code:</label>
                <input type="number" name='otp' class="form-control" id="otp" placeholder="Enter The code">
            </div>
            <div class="group-form">
                <label for="pwd">New Password:</label>
                <input type="number" name='pwd' class="form-control" id="pwd" placeholder="Enter New Password">
            </div>
            
            <div class="group-form">
                <label for="confirm-pwd">Confirm Password:</label>
                <input type="number" name='pwd' class="form-control" id="confirm-pwd" placeholder="Enter To Contirm Password">
            </div>
            <div class="form-check p-3">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
                </label>
            </div>
                <a href="/" type="" class="btn btn-primary">Continue</a>
        </form>
    </div>
</div>