<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  mysqli_query($conn,"DELETE FROM bayar");
    header('Location: '.URL.'cart.php', TRUE, 302);


  $conn->close();
}
?>