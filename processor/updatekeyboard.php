<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $post_id = $_POST["itemid"];
  $post_name = $_POST["namaitem"];
  $post_price = $_POST["hargaitem"];
  $post_image_url = $_POST["imageurl"];
  $post_stock = $_POST["stock"];
  $post_description = $_POST["descriptionitem"];

  $sql = "UPDATE keyboard
SET nama = '$post_name', stock = '$post_stock', description = '$post_description', harga = '$post_price', image = '$post_image_url'
WHERE id_keyboard = '$post_id';";

  if ($conn->query($sql) === TRUE) {
    header('Location: '.URL.'item-detail-keyboard.php?id='.$post_id, TRUE, 302);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>