<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email_post = $_POST["email"];
  $password_post = $_POST["pwd"];

  $sql = "SELECT * FROM user WHERE email = '$email_post' AND password = '$password_post'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      // save user info to session
      session_start();
      $_SESSION["isLoggedIn"] = TRUE;
      $_SESSION["email"] = $row["email"];
      $_SESSION["rate"] = $row["rate"];
    }
    header('Location: '.URL.'home.php', TRUE, 302);
  } else {
    echo "Username/Password Salah";
  }
  $conn->close();
}
?>