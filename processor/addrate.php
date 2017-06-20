<?php
require '../config/db-config.php';
require '../config/constant-config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$rate = $_POST["optradio"];
  $user1 = $_POST["iduser"];
  $number = 1;

  $sql = "SELECT * FROM poll_system where pollrate = '$rate'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc(); 
  $newrate = $row['countrate'] + $number;

  $sql1 = "UPDATE poll_system SET countrate = '$newrate' WHERE pollrate = '$rate';";

  $sql2 = "SELECT * FROM user where email = '$user1'";
  $result2 = $conn->query($sql2);
  $row2 = $result2->fetch_assoc();
  $newrateuser = $row2['rate'] + $number;

 $sql3 = "UPDATE user SET rate = '$newrateuser' WHERE email = '$user1';";
  $_SESSION['rate'] = 1;
  if ($conn->query($sql1) === TRUE && $conn->query($sql3) === TRUE) {
    header('Location: '.URL.'home.php', TRUE, 302);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>