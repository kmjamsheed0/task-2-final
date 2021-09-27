<?php
session_start();
session_destroy(); // Destroying All Sessions

header("location: index.php"); // Redirecting To Home Page

?>