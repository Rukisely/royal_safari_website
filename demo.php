<?php

$hostname = "127.0.0.1";
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

$fname = $_GET['fname'];
$lname = $_GET['lname'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$pass = $_GET['pass'];

$conn=mysqli_connect($hostname,$username,$password,$dbname);
if (!$conn) {
    echo"connection failed:".mysqli_connect_error();
    exit;
}

$fname=$_GET['fname'];
$lname=$_GET['lname'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$pass=$_GET['pass'];

$sql="INSERT INTO users(fname,lname,email,phone,pass) VALUES('$fname','$lname','$email','$phone','$pass')";
$result=mysqli_query($conn,$sql);
if(!$result) {
    echo "ERROR:".mysqli_error(conn);
    exit;
}


echo"Registration Successful";
mysqli_close($conn);

?>
