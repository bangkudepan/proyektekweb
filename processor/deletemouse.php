<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $post_id = $_POST["iddelete"];

  $sql = "DELETE FROM mouse WHERE id_mouse = $post_id;";

  if ($conn->query($sql) === TRUE) {
    header('Location: '.URL.'mouse.php', TRUE, 302);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>