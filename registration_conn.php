<?php
require_once("connection.php");

$user=$inst=$email=$phone=$password=$pwd="";

$user= $_POST['username'];
$inst= $_POST['institution'];
$email= $_POST['mail'];
$phone= $_POST['pnumber'];
$pwd= $_POST['password'];
$password= MD5($pwd);

$sql="INSERT INTO userdetails(username,institution,email,phonenumber,password)
 VALUES ('$user','$inst','$email','$phone','$password');";

$result=mysqli_query($conn,$sql);

if($result)
{
	header("location: login.php");
}

?>