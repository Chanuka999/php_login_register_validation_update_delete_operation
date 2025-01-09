<?php include "dbConnect.php"; ?>
<html>
 <head>
   <title>Display</title>
   <link rel="stylesheet" href="admin.css">
 </head>
 <body>
    <h1>Display Value</h1>
	<table>
	<?php
	
	$sql = "SELECT * FROM user";
	
	$res = mysqli_query($conn,$sql);
	
	if(!$res){
	 echo "error";
	}else{
	  $count = mysqli_num_rows($res);
	  echo "
		  <thead>
		  <tr>
		  <th>name</th>
		  <th>email</th>
		  <th>age</th>
		  <th>password</th>
		  <th></th>
		  </tr>
		  </thead>
		 ";
	  if($count>0){
	    while($row = mysqli_fetch_assoc($res)){
		  echo "
		  <tbody>
		  <tr>
		  <td>".$row['name']."</td>
		  <td>".$row['email']."</td>
		  <td>".$row['age']."</td>
		  <td>".$row['password']."</td>
		  <td>
		  <a href='./update.php?id=".$row['id']."'><button>Update Value</button></a>
		   <a href='./delete.php?id=".$row['id']."'><button>Delete Value</button></a>
		  </td>
		  </tr>
		  </tbody>
		 ";
		 
		}
	  }
	}
	
	
	?>
	</table>
 </body>
</html>