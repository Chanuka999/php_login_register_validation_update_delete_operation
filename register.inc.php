<?php

include "dbConnect.php";
include "validation.php";

if(isset($_POST["submit"])){
 $name = $_POST["name"];
 $email = $_POST["email"];
 $age = $_POST["age"];
 $password = $_POST["password"];
 $cpassword = $_POST["cpassword"];
 
 if(inputEmpty($name,$email,$age,$password,$cpassword)){
   header("location:./register.php?error=EmptyInput");
 }else if(invalidName($name)){
  header("location:./register.php?error=InvalidError");
 }else if(invalidEmail($email)){
    header("location:./register.php?error=InvalidEmail");
 }else if(invalidPassword($password)){
   header("location:./register.php?error=invalidPassword");
 }else if(matchPassword($password,$cpassword)){
   header("location:./register.php?error=notMatchPassword");
 }else if(availableData($conn,$email)){
    header("location:./register.php?error=availableData");
 }else{
    register($conn,$name,$email,$age,$password,$cpassword);
 }
 }
 
 function register($conn,$name,$email,$age,$password,$cpassword){
 
 $hashpassword = password_hash($password, PASSWORD_DEFAULT);
 $sql = "INSERT INTO user(name,email,age,password) 
  VALUES(?,?,?,?);";
  
  $stmt = mysqli_stmt_init($conn);
  
  $res = mysqli_stmt_prepare($stmt,$sql);
  
  if(!$res){
   echo "stmt error";
  }else{
    mysqli_stmt_bind_param($stmt,"ssis",$name,$email,$age,$hashpassword);
	
	mysqli_stmt_execute($stmt);
	
	header("location:./login.php?register=successful");
	
	
  }
 }
 
 


?>