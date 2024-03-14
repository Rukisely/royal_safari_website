<?php
session_start();

include 'config.php';

$uname = $_POST['email'];
$pass = $_POST['pass'];



$sql = "SELECT email,pass FROM admin where email='$uname' and pass='$pass' ";
$result = $conn->query($sql);

$_SESSION["email"] = $uname;
if ($result->num_rows > 0) {


  header('Location:adminhome.html');
} else {

 echo '<script> alert("Invalid Details. Please try Again!")</script>';
      echo "<script type='text/javascript'> document.location = 'adminlogin.html';</script>";
}
$conn->close();

?>