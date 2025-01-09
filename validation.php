<?php

include "dbConnect.php";

function inputEmpty($name,$email,$age,$password,$cpassword){
	$value;
	if(empty($name) || empty($email) || empty($age) || empty($password) || empty($cpassword)){
		$value=true;
	}else{
		$value=false;
	}
	return $value;
}

function invalidName($name){
	$value=true;
	if(!preg_match("/^[a-zA-Z]+$/", $name)){
		$value=true;
	}else{
		$value=false;
	}
	return $value;
}

function invalidEmail($email){
	$value=true;
	
	if(!preg_match("/^[a-zA-Z\d\._-]+@[a-zA-Z\d\_-]+.[a-zA-z\d\.]{2,}$/", $email)){
		$value=true;
	}else{
		$value=false;
	}
}
function invalidPassword($password){
	$value;
	
	if(!preg_match("/^.{5,}$/",$password)){
		$value=true;
	}else{
		$value=false;
	}
	return $value;
}

function matchPassword($password,$cpassword){
	$value;
	
	if($password != $cpassword){
		$value=true;
	}else{
		$value=false;
	}
}

function availableData($conn,$email){
	$value;
	
	$sql = "SELECT * FROM user WHERE email=?;";
	
	$stmt=mysqli_stmt_init($conn);
	
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("location:./register.php?error=availableEmail");
		exit();
	}else{
		mysqli_stmt_bind_param($stmt,"s",$email);
		
		mysqli_stmt_execute($stmt);
		
		$data = mysqli_stmt_get_result($stmt);
		
		if(!mysqli_fetch_assoc($data)){
			$value=false;
		}else{
			$value=true;
		}
		return $value;
	}
	
	
	
}
?>