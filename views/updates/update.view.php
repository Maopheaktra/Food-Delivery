<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Information</title>
</head>

<body>
    <h2>Update User Information</h2>
    <form action="../../controllers/updates/update.user.controller.php" method="POST">
        <div class="form-group">
            <label for="username" class="text-dark">Username</label>
            <input type="text" name="usernames" placeholder="Enter Name" class="form-control" id="username" />
        </div>
        <div class="form-group">
            <label for="email" class="text-dark">Email</label>
            <input type="email" placeholder="Enter Email" name='email' class="form-control" id="email"
                aria-describedby="emailHelp" />
        </div>
        <div class="form-group">
            <label for="password" class="text-dark">Password</label>
            <input type="password" placeholder="Enter Password" class="form-control" name="password"
                id="password" />
        </div>
        <div class="form-group">
            <label for="phoneNumber" class="text-dark">Phone Number</label>
            <input type="number" placeholder="Phone number" class="form-control" name="phone" id="phoneNumber" />
        </div>
        <label for="radio1" class="text-dark mb-3">Your gender</label>
        <div class="form-group d-flex">
            <div class="form-check mr-5 ml-5">
                <input type="radio" class="form-check-input" id="gender" name="gender" value="M" checked>
                <label class="form-check-label" for="radio1">Male</label>
            </div>
            <div class="form-check mr-5 ml-5">
                <input type="radio" class="form-check-input" id="gender" name="gender" value="F">
                <label class="form-check-label" for="radio2">Female</label>
            </div>
        </div>
        <label for="radio1" class="text-dark mb-3">Your role</label>
        <div class="form-group d-flex">
            <div class="form-check mr-5 ml-5">
                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="1" checked>
                <label class="form-check-label" for="radio1">Customer</label>
            </div>
            <div class="form-check mr-5 ml-5">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="2">
                <label class="form-check-label" for="radio2">Restaurant owner</label>
            </div>
            <div class="form-check mr-5 ml-5">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="3">
                <label class="form-check-label" for="radio2">Delivery</label>
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block">Update</button>
    </form>
</body>

</html>
</body>

</html>