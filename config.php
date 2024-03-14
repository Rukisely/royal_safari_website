<?php
$hostname = "localhost";
$servername="localhost";
$username = "root";
$password = "";
$dbname = "royal_safari";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//  echo 'success';
 
 

?>