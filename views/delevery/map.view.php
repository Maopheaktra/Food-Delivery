<<<<<<< HEAD
<?php
if (isset($_POST['submit_address'])){
    $address = urlencode($_POST['address']);
    $address = str_replace(" ", "+", $address);
    ?>
    <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed></iframe>
    <?php
}
if (isset($_POST['submit_coordinates'])) {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    ?>
    <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embe"></iframe>
    <?php
}
?>
<form method="post">
=======
<!-- <form action="controllers/delivery/delivery.controller.php" method="post">
>>>>>>> 69230546812a671212807bfa9105880697bd85b0
    <p><input type="text" name="address" placeholder="Enter address"></p>
    <input type="submit" name="submit_address">
</form>
<form method="post">
    <p>
        <input type="text" name="latitude" placeholder="Enter latitude">
    </p>
    <p>
        <input type="text" name="longitude" placeholder="Enter longitude">
    </p>
    <input type="submit" name="submit_coordinates">
</form> -->