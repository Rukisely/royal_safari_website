<?php
$hostname="127.0.0.1";
$username="root";
$password="";
$dbname="royal_safari";

$conn=mysqli_connect($hostname,$username,$password,$dbname);
if (!$conn) {
    echo"connection failed:".mysqli_connect_error();
    exit;
}

$name=$_GET['name'];
$email=$_GET['email'];
$message=$_GET['message'];

$sql="INSERT INTO messages(name,email,message) VALUES('$name','$email','$message')";
$result=mysqli_query($conn,$sql);
if(!$result) {
    echo "ERROR:".mysqli_error(conn);
    exit;
}

echo"Message sent Successful";
mysqli_close($conn);

?>
