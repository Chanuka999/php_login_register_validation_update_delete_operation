<?php

include "dbConnect.php";

if(isset($_GET["id"])){
 $id = $_GET["id"];
 
 $sql = "DELETE from user WHERE id = $id";
 
 $res = mysqli_query($conn,$sql);
 
 if($res == true){
   header("location:./display.php?delete=success");
 }else{
  header("location:./display.php?delete=failed");
 }
}

?>