<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name_post = $_POST["headsetname"];
	$merk_post = $_POST["merkheadset"];
	$stock_post = $_POST["stockheadset"];
  $desc_post  = $_POST["descriptionheadset"];
  $harga_post = $_POST["hargaheadset"];
  $image_post = $_POST["imageheadset"];

  $sql = "INSERT INTO headset (merk, nama, stock, description, harga, image)
VALUES ('$merk_post', '$name_post', '$stock_post','$desc_post','$harga_post', '$image_post')";

  if ($conn->query($sql) === TRUE) {
    header('Location: '.URL.'headset.php', TRUE, 302);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>