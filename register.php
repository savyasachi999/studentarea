<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>sign</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="box">
	<h2>Sign Up</h2>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

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
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Login</a>
		</p>
	</form>
	</div>
</body>
</html>