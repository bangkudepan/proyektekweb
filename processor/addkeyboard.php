<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name_post = $_POST["keyboardname"];
	$merk_post = $_POST["merkkeyboard"];
	$stock_post = $_POST["stockkeyboard"];
  $desc_post  = $_POST["descriptionkeyboard"];
  $harga_post = $_POST["hargakeyboard"];
  $image_post = $_POST["imagekeyboard"];

  $sql = "INSERT INTO keyboard (merk, nama, stock, description, harga, image)
VALUES ('$merk_post', '$name_post', '$stock_post','$desc_post','$harga_post', '$image_post')";

  if ($conn->query($sql) === TRUE) {
    header('Location: '.URL.'keyboard.php', TRUE, 302);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>