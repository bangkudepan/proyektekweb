<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $post_id = $_POST["iddelete"];

  $sql = "DELETE FROM keyboard WHERE id_keyboard = $post_id;";

  if ($conn->query($sql) === TRUE) {
    header('Location: '.URL.'keyboard.php', TRUE, 302);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>