<?php  include "dbConnect.php";

if(isset($_GET["id"])){
  $id = $_GET["id"];
  
  $sql = "SELECT * FROM user WHERE id = ?";
  
  $stmt = mysqli_stmt_init($conn);
  
  $res= mysqli_stmt_prepare($stmt,$sql);
   
   if(!$res){
     echo "error";
   }else{
     mysqli_stmt_bind_param($stmt,"i",$id);
	 
	 mysqli_stmt_execute($stmt);
	 
	
	 
	 $data = mysqli_stmt_get_result($stmt);
	 
	 $row = mysqli_fetch_assoc($data);
   }
}
?>
<html>
<head>
  <title>update</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
	<form class="form" action="./update.inc.php?new_id=<?php echo $id; ?>" method="POST">
	 <label>name</label>
	 <input type="text" name="name" value="<?php echo $row['name']; ?>">
	 
	 <label>Email</label>
	 <input type="email" name="email" value="<?php echo $row['email']; ?>">
	
	  <label>Age</label>
	 <input type="text" name="age" value="<?php echo $row['age']; ?>">
	 
	  <label>Password</label>
	 <input type="text" name="password" value="<?php echo $row['password']; ?>">
	 
	 
	
	 <input type="submit" name="submit" value="update">
	
	 <br>
	
	</form>
	</div>
</body>
</html>