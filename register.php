<html>
  <head>
    <title>Login page</title>
	<link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
	<form class="form" action="register.inc.php" method="POST">
	 <label>name</label>
	 <input type="text" name="name" placeholder="enter your name">
	 
	 <label>Email</label>
	 <input type="email" name="email" placeholder="enter your email">
	
	  <label>Age</label>
	 <input type="text" name="age" placeholder="enter your age">
	 
	  <label>Password</label>
	 <input type="password" name="password" placeholder="enter your password">
	 
	  <label>Confirm Password</label>
	 <input type="password" name="cpassword" placeholder="enter your confirm password">
	
	 <input type="submit" name="submit" value="submit">
	 <input type="submit" name="reset" value="reset">
	 <br>
	 <a href="./login.php">Are you register here?</a>
	</form>
	</div>
  </body>
</html>