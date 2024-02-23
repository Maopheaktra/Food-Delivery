<?php
// index.php
require '../../database/database.php';

session_start();
$sessionId = 1; // User's session
$userStmt = $connection->prepare("SELECT * FROM users WHERE user_id = ?");
$userStmt->execute([$sessionId]);
$user = $userStmt->fetch();
?>
<form class="form" id="form" action="" enctype="multipart/form-data" method="post">
    <link rel="stylesheet" href="../../views/profiles/profile.css">
<div class="upload">
    <?php
    $id = $user["user_id"];
    $name = $user["username"];
    $image = $user["image"];
    ?>
    <img src="../../assets/images/user/<?php echo $image; ?>" width="125" height="125" title="<?php echo $image; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="round">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
        <i class="fa fa-camera" style="color: #fff;"></i>
    </div>
</div>
</form>
<script type="text/javascript">
    document.getElementById("image").onchange = function () {
        document.getElementById("form").submit();
    };
</script>
<?php
if (isset($_FILES["image"]["name"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];

    $imageName = $_FILES["image"]["name"];
    $imageSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    // Image validation
    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);
    if (!in_array($imageExtension, $validImageExtension)) {
        echo "<script>alert('Invalid Image Extension'); document.location.href = '/controllers/profiles/upload_profile.controller.php';</script>";
    } elseif ($imageSize > 1200000) {
        echo "<script>alert('Image Size Is Too Large'); document.location.href = '/controllers/profiles/upload_profile.controller.php';</script>";
    } else {
        $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
        $newImageName .= '.' . $imageExtension;
        $query = "UPDATE users SET image = ? WHERE user_id = ?";
        $stmt = $connection->prepare($query);
        $stmt->execute([$newImageName, $id]);
        move_uploaded_file($tmpName, '../../assets/images/user/' . $newImageName);
        echo "<script>document.location.href = '/controllers/profiles/upload_profile.controller.php';</script>";
        header('location: /profile');

    }
}
?>
</body>
</html>