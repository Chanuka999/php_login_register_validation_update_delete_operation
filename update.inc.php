<?php

include "dbConnect.php";

if(isset($_GET["new_id"])){
 $new_id = $_GET["new_id"];
 
}

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $age = $_POST["age"];
  $password = $_POST["password"];
  
  $sql = "UPDATE user SET name='$name', email='$email', age='$age', password='$password' WHERE id = '$new_id'";
  
  $res = mysqli_query($conn,$sql);
  
  if($res == true){
    header("location:./display.php?update=successfull");
  }else{
    header("location:./update.php?update=failed");
  }
 }

?>