<html>
  <head>
  <title>login form</title>
  <link rel="stylesheet" href="style.css">
  </head>
  <body>
   
   <div class="container">
   <h1>Login form</h1>
   <form class="form" method="POST" action="./login.inc.php">
     <label>name</label>
	 <input type="text" name="name" placeholder="Enter your name">
	 <br>
	  <label>Email</label>
	 <input type="email" name="email" placeholder="Enter your email">
	 <br>
	 
	 <input type="submit" name="submit">
	 <a href="./register.php">are you have account?</a>
	 </form>
   </div>
  </body>
</html>