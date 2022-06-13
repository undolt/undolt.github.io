<?php
$servername="localhost";
$username="root";
$password="";
$myDb="undolt";
try{
	$conn=new PDO("mysql:host=$servername; dpname=$myDb,$username,$password");
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "connection failed".$e->getMessage();
}
?>