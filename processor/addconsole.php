<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name_post = $_POST["consolename"];
	$merk_post = $_POST["merkconsole"];
	$stock_post = $_POST["stockconsole"];
  $desc_post  = $_POST["descriptionconsole"];
  $harga_post = $_POST["hargaconsole"];
  $image_post = $_POST["imageconsole"];

  $sql = "INSERT INTO console (merk, nama, stock, description, harga, image)
VALUES ('$merk_post', '$name_post', '$stock_post','$desc_post','$harga_post', '$image_post')";

  if ($conn->query($sql) === TRUE) {
    header('Location: '.URL.'console.php', TRUE, 302);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>