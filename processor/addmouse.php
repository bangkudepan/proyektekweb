<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name_post = $_POST["mousename"];
	$merk_post = $_POST["merkmouse"];
	$stock_post = $_POST["stockmouse"];
  $desc_post  = $_POST["descriptionmouse"];
  $harga_post = $_POST["hargamouse"];
  $image_post = $_POST["imagemouse"];

  $sql = "INSERT INTO mouse (merk, nama, stock, description, harga, image)
VALUES ('$merk_post', '$name_post', '$stock_post','$desc_post','$harga_post', '$image_post')";

  if ($conn->query($sql) === TRUE) {
    header('Location: '.URL.'mouse.php', TRUE, 302);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>