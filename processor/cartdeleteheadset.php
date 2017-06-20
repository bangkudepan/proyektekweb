<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $item_post = $_POST["deleteitem"];
  $itemuser = $_POST["itemusername"];

  $sql = "DELETE FROM cart WHERE id_cart = '$item_post' AND username ='$itemuser'";
  $result = $conn->query($sql);
  
  if ($conn->query($sql) === TRUE) {
    header('Location: '.URL.'cart.php', TRUE, 302);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>