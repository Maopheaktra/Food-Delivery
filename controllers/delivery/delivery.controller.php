
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

