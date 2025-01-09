<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "logform";

$conn = mysqli_connect($serverName,$userName,$password,$dbName);

if($conn){
	echo "connection successfull";
}else{
	echo "connection failed";
}

?>