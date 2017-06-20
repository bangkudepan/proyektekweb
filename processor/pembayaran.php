<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

session_start();

    $nama_post = $_POST["namauser"];
    $alamat_post = $_POST["alamatuser"];
    $norekening_post = $_POST["norekening"];
    $rekeningtujuan_post = $_POST["rekeningtujuan"];

    $totalharga2_post = $_POST["totalharga2"];

    $user1 = $_SESSION["email"];


    mysqli_query($conn,"INSERT INTO tabel_pemesanan (username, norekening, nama, alamat , rekening, total) VALUES ('$user1', '$norekening_post', '$nama_post', '$alamat_post', '$rekeningtujuan_post', '$totalharga2_post')");
      mysqli_query($conn,"DELETE FROM bayar");

    $sql = "SELECT * FROM cart WHERE username = '$user1'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc())
        {
          $iditem1 = $row['id_cart'];
          $nama1 = $row['nama_item'];
          $jumlah1 = $row['jumlah_item'];
          $harga1 = $row['harga_item'];
          $username1 = $row['username'];
          $image1 = $row['image'];
          $total1 = $row['total'];
          $stock1 = $row['stock'];

            
            mysqli_query($conn,"INSERT INTO history (id_cart, nama_item, jumlah_item, harga_item, username, image, total, stoc) VALUES ('$iditem1', '$nama1', '$jumlah1', '$harga1', '$username1', '$image1', '$total1', '$stock1')");

            $newstock = $stock1 - $jumlah1;

            
            mysqli_query($conn,"UPDATE headset SET stock = '$newstock' WHERE id_headset = '$iditem1'");
            mysqli_query($conn,"UPDATE mouse SET stock = '$newstock' WHERE id_mouse = '$iditem1'");
            mysqli_query($conn,"UPDATE keyboard SET stock = '$newstock' WHERE id_keyboard = '$iditem1'");
            mysqli_query($conn,"UPDATE console SET stock = '$newstock' WHERE id_console = '$iditem1'");
        }
      }
      mysqli_query($conn,"DELETE FROM cart WHERE username = '$user1'");
      header('Location: '.URL.'index.php', TRUE, 302);

  $conn->close();
}
?>