<?php
require '../config/db-config.php';
require '../config/constant-config.php';

session_start();
    $user1 = $_SESSION["email"];
    $sql = "SELECT * FROM cart WHERE username = '$user1'";
    $result = $conn->query($sql);

    $totalharga_post = $_POST["totalharga"];

    mysqli_query($conn,"INSERT INTO bayar(username, total) VALUES ('$user1', '$totalharga_post')");

   // if($result->num_rows > 0){
     //   while($row = $result->fetch_assoc())
       // {
        //  $iditem1 = $row['id_cart'];
         // $nama1 = $row['nama_item'];
         // $jumlah1 = $row['jumlah_item'];
         // $harga1 = $row['harga_item'];
         // $username1 = $row['username'];
         // $image1 = $row['image'];
         // $total1 = $row['total'];
         // $stock1 = $row['stock'];

            
            //mysqli_query($conn,"INSERT INTO history (id_cart, nama_item, jumlah_item, harga_item, username, image, total, stoc) VALUES ('$iditem1', '$nama1', '$jumlah1', '$harga1', '$username1', '$image1', '$total1', '$stock1')");

          //  $newstock = $stock1 - $jumlah1;

            
            //mysqli_query($conn,"UPDATE headset SET stock = '$newstock' WHERE id_headset = '$iditem1'");
            //mysqli_query($conn,"UPDATE mouse SET stock = '$newstock' WHERE id_mouse = '$iditem1'");
            //mysqli_query($conn,"UPDATE keyboard SET stock = '$newstock' WHERE id_keyboard = '$iditem1'");
            //mysqli_query($conn,"UPDATE console SET stock = '$newstock' WHERE id_console = '$iditem1'");
       // }
     // }
      header('Location: '.URL.'bayar.php', TRUE, 302);

  $conn->close();
?>