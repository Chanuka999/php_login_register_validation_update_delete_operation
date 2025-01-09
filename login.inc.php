<?php

include "dbConnect.php";

if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$email = $_POST["email"];
	
	
	$sql = "SELECT * FROM user WHERE name=? AND email=?";	
	
	$stmt = mysqli_stmt_init($conn);
	
	 
	
	if(!mysqli_stmt_prepare($stmt,$sql)){
		echo "stmt is failed";
	}else{
		mysqli_stmt_bind_param($stmt,"ss",$name,$email);
		
		mysqli_stmt_execute($stmt);
		
		$data = mysqli_stmt_get_result($stmt);
		$count = mysqli_num_rows($data);
	
	if($count>0){
		header("location:./profile.php?login=sucess");
	}else{
		header("location:./login.php?login=error");
	}
	}
	
	
	
}

?>