<?php
	$servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "one";
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS one";
if ($conn->query($sql) === TRUE) {
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql1 = "CREATE TABLE IF NOT EXISTS users ( 
                      EMAIL varchar(255) NOT NULL,
                      PASSWORD varchar(255) NOT NULL,
                      PRIMARY KEY  (EMAIL))";
  $tab = $conn->query($sql1);
  if(!$tab) {
    echo "Database and Table Offine";
  }
} else {
  echo "Error creating database: " . $conn->error;
}

//$conn->close();
?>