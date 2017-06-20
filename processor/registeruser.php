<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email_post = $_POST["signup_email"];
	$password_post = $_POST["signup_password"];
	$fullname_post = $_POST["signup_fullname"];

  $sql = "INSERT INTO user (email, password, fullname, rate)
VALUES ('$email_post', '$password_post', '$fullname_post', '0')";

  if ($conn->query($sql) === TRUE) {
    header('Location: '.URL.'home.php', TRUE, 302);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>