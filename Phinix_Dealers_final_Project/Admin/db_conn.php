<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "phinix_dealers";

$conn = mysqli_connect($sname, $uname, $password,$db_name);

if(!$conn){
	echo "connection failed!";
	exit();
}
if(mysqli_connect_error())
	{
		echo "Connection error".mysqli_connect_error();
		exit;
	}
	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>