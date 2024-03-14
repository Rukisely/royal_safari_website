<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="royal_safari";

$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if (!$conn) {
    echo"connection failed:".mysqli_connect_error();
    exit;
}

$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];

$sql="INSERT INTO messages(name,email,message) VALUES('$name','$email','$message')";
$result=mysqli_query($conn,$sql);
if(!$result) {
    echo "ERROR:".mysqli_error(conn);
    exit;
}

echo"Message sent Successful";
mysqli_close($conn);

?>
