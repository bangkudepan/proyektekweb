<?php
require '../config/constant-config.php';

session_start();
//remove all session variables
session_unset();
//destroy session
session_destroy();

header('Location: '.URL.'home.php', TRUE, 302);

?>