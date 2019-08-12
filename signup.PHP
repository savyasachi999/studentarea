<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Input Form UI design</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="box">
	<h2>Sign Up</h2>
	<form action="register.php" method="post">
		
		<div class="inputbox">
			<input type="text" name="username" required="">
			<label>UserName</label>
		</div>
		<div class="inputbox">
			<input type="text" name="email" pattern="^\w.+@[a-zA-Z0-9_]+?\.[a-zA-Z]{2,3}$" required="">
			<label>Email</label>
		</div>
		<div class="inputbox">
			<input type="text" name="mobile" pattern="[0-9]{10}"required>
			<label>Mobile no</label>
		</div>
		<div class="inputbox">
			<input type="number" name="year" required="">
			<label>Year</label>
		</div>
		<div class="inputbox">
			<input type="text" name="branch" required="">
			<label>Branch</label>
		</div>
		
		<div class="inputbox">
			<input type="password" name="password_1" required="">
			<label>Password</label>
		</div>
		<div class="inputbox">
			<input type="text" name="specialcode"  pattern="\S{8}" required="">
			<label>Special code</label>
		</div>
		
		<input type="Submit" name="reg_user">
		<p class="message"><font color="white">Already Registered...?Then </font><a href="log.html"><font color="mediumseagreen">Login HERE</font></a></p>
	</form>
	</div>
</body>
</html>
		