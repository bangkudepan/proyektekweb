<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$id_post = $_POST["itemid"];
	$jumlah_post = $_POST["jumlahitem"];
	$harga_post = $_POST["hargaitem"];
  $image_post = $_POST["imageurl"];
  $nama_post = $_POST["namaitem"];
  $user_post = $_POST["user"];
  $stock_post = $_POST["stock"];
  $total = intval($jumlah_post) * intval($harga_post);

  $sql = "INSERT INTO cart (id_cart, nama_item, jumlah_item, harga_item, username, image, total, stock)
VALUES ('$id_post', '$nama_post', '$jumlah_post', '$harga_post', '$user_post', '$image_post', '$total', '$stock_post')";




  if ($conn->query($sql) === TRUE) {
    header('Location: '.URL.'index.php', TRUE, 302);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>